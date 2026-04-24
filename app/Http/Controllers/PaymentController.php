<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $payment;

    public function __construct(PaymentInterface $payment) 
    {
        $this->payment = $payment;
    } 

    public function pay() 
    {
        return $this->payment->pay([]);
    }
}
