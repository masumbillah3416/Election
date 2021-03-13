<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class emailPassWord extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $details)
    {
        $this->details= $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("welcome mail from Election 2020") ->view('email.pass');
    }
}


 ////  buFHfvX+ad#cQSbR8!a?Avs%tpxbrmH#@d^sDDMpKxLGbQVh2Qdb%rG#RdWYMvXC8?xR2mjEcp6H5e_MbKxvgtcQ9%CFZhXZ9hYAq4Y6EB3+N8u7=zM+vCHF9Twba-st-hNwYW^zMGYpWSBve@TEwGfMGE&7W4QE+S3CPmqE&+yV7kjSZ6h!Qg!+ghcfn@ag%CyWM?MF#8dVMYdy93VD$hECL*c3W=*&aS+$pPRJ3%Gs*qucaJ@d^%s$B$Fe6XYd