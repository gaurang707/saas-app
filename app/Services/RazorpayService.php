<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;


class RazorpayService implements PaymentInterface 
{
    public function pay(array $data) {
        return "paid via Razorpay";
    }
}