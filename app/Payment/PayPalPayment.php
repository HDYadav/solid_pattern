<?php
namespace App\Payment;

use App\Contracts\PayableInterface;

class PayPalPayment implements PayableInterface{

    public function pay()
    {
        return "Paypal Selected";
    }
}