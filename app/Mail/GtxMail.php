<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GtxMail extends Mailable
{
    use Queueable, SerializesModels;

    public $gtxAmount;
    public $bitcoinAmount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bitcoinAmount, $gtxAmount)
    {
        $this->bitcoinAmount = $bitcoinAmount;
        $this->gtxAmount = $gtxAmount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Project Biosphere')->markdown('emails.GtxMail');
    }
}
