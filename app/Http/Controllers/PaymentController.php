<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function pay(Request $request, PaymentService $paymentService){

        $payment_type = $request->input('payment_type');
        $payment = $paymentService->initialize($payment_type);
        $response = $payment->pay();
        return $response;
    }
}
