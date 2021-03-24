<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TuesdayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $tuesday;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tuesday_offer)
    {
        $this->tuesday = $tuesday_offer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.tuesday');
    }
}
