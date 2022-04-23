<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Pizza;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $type;
    public $base;
    public $price;
    public $drink;
    public $address;
    public $services;
    public $payment;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $address, $email, $services, $payment, $type, $base, $price, $drink)
    {
        $this->name = $name;
        $this->address = $address;
        $this->services = $services;
        $this->payment = $payment;
        $this->type = $type;
        $this->base = $base;
        $this->price = $price;
        $this->drink = $drink;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orderconfirm');
    }
}
