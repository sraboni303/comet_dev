<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FridayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $friday_offer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($friday)
    {
        $this->friday_offer = $friday;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.friday');
    }
}
