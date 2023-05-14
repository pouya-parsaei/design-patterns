<?php

namespace App\Http\Controllers;

use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use Src\Strategy\Payment\CashPayment;
use Src\Strategy\Payment\ChequePayment;
use Src\Strategy\Payment\OnlinePayment;
use Src\Strategy\Payment\Order;
use Src\Strategy\Payment\PaymentMethod;

class StrategyPaymentController extends Controller
{
    public function startPayment(Request $request)
    {
        $order = new Order(11000000);

        $paymentService = $this->makePaymentMethod($request->validated('payment_method'));

        $paymentService->doPayment($order);
    }

    private function makePaymentMethod(string $method): PaymentMethod
    {
        switch ($method) {
            case 'online':
                return new OnlinePayment();
            case 'cash':
                return new CashPayment();
            case 'cheque':
                return new ChequePayment();
            default:
                throw new RuntimeException('invalid method');
        }
    }
}
