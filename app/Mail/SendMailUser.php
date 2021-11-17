<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    private $nome;
    private $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$nome,$msg)
    {
        $this->email = $email;
        $this->nome = $nome;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('AVISO DO SISTEMA AUTOROLA');
        $this->to($this->email, $this->nome);

        return $this->markdown('mail.SendMailUser',['msg' => $this->msg]);


    }
}
