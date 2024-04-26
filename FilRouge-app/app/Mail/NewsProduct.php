<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsProduct extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $email;

    public function __construct($user, $email)
    {
        $this->user = $user;
        $this->email = $email;
    }

    /**
     *
     * Build the message.*
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.product_news')
            ->subject('Nouveau Produit est ajouté a la liste!')
            ->with(['email' => $this->email]);
    }
}
