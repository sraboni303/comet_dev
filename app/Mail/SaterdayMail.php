<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SaterdayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $saterday_offer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($saterday)
    {
        $this->saterday_offer = $saterday;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.saterday');
    }
}
