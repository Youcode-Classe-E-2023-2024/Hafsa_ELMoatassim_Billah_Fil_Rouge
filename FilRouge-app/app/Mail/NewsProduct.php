<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsProduct extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     *
     * Build the message.*
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.product_news')
            ->subject('Nouveau Produit est ajouté a la liste!');
    }
}
