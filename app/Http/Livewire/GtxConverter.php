<?php

namespace App\Http\Livewire;

use App\Mail\GtxMail;
use App\Models\GtxBuyRequest;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class GtxConverter extends Component
{
    // per bitcoin
    public $gtxPrice = 0.000022;
    public $bitcoinAmount = 0;
    public $email;
    public $referral;

    protected $rules = [
        'bitcoinAmount' => 'required|numeric|min:1',
        'email' => 'required|email',
    ];

    public function store()
    {
        $this->validate();
        GtxBuyRequest::create([
            'bitcoin_amount' => $this->bitcoinAmount,
            'gtx_convertion' => sprintf('%f', $this->gtxPrice),
            'buyer_email' => $this->email,
            'referral_email' => $this->referral
        ]);

        Mail::to($this->email)->send(new GtxMail($this->getGtxProperty(), $this->bitcoinAmount));

        session()->flash('message', 'Request sent. You may check your email for details.');

        return  redirect()->to('/request-sent');
    }

    public function getGtxProperty()
    {
        $amount = $this->bitcoinAmount;
        $result = (float)$amount * $this->gtxPrice;

        return sprintf('%f', $result);
    }

    public function render()
    {
        return view('livewire.gtx-converter');
    }
}
