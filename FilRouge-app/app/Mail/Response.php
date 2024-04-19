<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Response extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $message;

    public function __construct($user, $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    public function build()
    {
        $messageContent = $this->message instanceof \Illuminate\Mail\Message ? $this->message->getHtmlBody() : $this->message;

        return $this->view('emails.contact')
            ->subject('Réponse à votre réclamation')
            ->with(['user' => $this->user, 'messagy' => $messageContent]);
    }



}
