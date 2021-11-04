<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CartSendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cart, $user, $price_total)
    {
        $this->name = $user['name'];
        $this->cart = $cart;
        $this->price_total = $price_total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('kiyaden@gmail.com')
        ->subject('【ご注文ありがとうございます。】御菓子 司木屋傳')
        ->view('emails.cart_mail')
        ->with([
            'name' => $this->name,
            'cart' => $this->cart,
            'price_total' => $this->price_total,
            
        ]);

    }
}
