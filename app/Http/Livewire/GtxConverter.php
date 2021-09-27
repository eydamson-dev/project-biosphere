<?php

namespace App\Http\Livewire;

use AmrShawky\LaravelCurrency\Facade\Currency;
use App\Mail\GtxMail;
use App\Models\GtxBuyRequest;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class GtxConverter extends Component
{
    public $gtxAmount = 0;
    public $email;
    public $referral;

    protected $rules = [
        'gtxAmount' => 'required|numeric|min:1',
        'email' => 'required|email',
    ];

    public function store()
    {
        $this->validate();
        GtxBuyRequest::create([
            'gtx_amount' => $this->gtxAmount,
            'bitcoin_rate' => sprintf('%f', $this->getBitCoinRate()),
            'buyer_email' => $this->email,
            'referral_email' => $this->referral
        ]);

        Mail::to($this->email)->send(new GtxMail($this->getBitcoinProperty(), $this->gtxAmount));

        session()->flash('message', 'Request sent. You may check your email for details.');

        return  redirect()->to('/request-sent');
    }

    public function getBitCoinRate() {

        $btcRate = cache()->remember("BTC", now()->addSeconds(30), function() {
            $rate = Currency::rates()
                    ->historical(Date::now())
                    ->symbols(['BTC'])
                    ->get();

            return $rate['BTC'];
        });

        return $btcRate;
    }

    public function getBitcoinProperty()
    {
        $amount = $this->gtxAmount;
        $result = (float)$amount * $this->getBitCoinRate();

        return sprintf('%f', $result);
    }

    public function render()
    {
        return view('livewire.gtx-converter');
    }
}
