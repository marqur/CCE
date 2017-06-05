<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $textarea;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name,$email, $textarea)
    {
        $this->name = $name;
        $this->email = $email;
        $this->textarea = $textarea;
    }   

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mymail');
    }
}
