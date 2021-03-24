<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MondayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $monday_offer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($monday_mail)
    {
        $this->monday_offer = $monday_mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.monday');
    }
}
