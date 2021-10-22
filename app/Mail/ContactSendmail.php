<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->message = $inputs['message'];
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
        ->subject('【お問い合わせありがとうございます。】御菓子司 木屋傳')
        ->view('contacts.mail')
        ->with([
            'name' => $this->name,
            'email' => $this->email,
            'body' => $this->message,
        ]);
    }
}
