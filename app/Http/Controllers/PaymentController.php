<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\Adapter\PaymentProvider\OnlinePaymentService;

class PaymentController extends Controller
{

    public function __construct(private OnlinePaymentService $paymentService)
    {

    }

    public function pay(Request $request)
    {
        $this->paymentService->pay(10000);
    }

}
