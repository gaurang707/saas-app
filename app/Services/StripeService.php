<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class StripeService implements PaymentInterface 
{
    public function pay(array $data) {
        return "Paid via Stripe";
    }  
}