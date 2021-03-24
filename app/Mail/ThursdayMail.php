<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThursdayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $thursday_offer;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($thursday)
    {
        $this->thursday_offer = $thursday;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.thursday');
    }
}
