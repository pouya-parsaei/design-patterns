<?php

namespace Src\Strategy\Payment;

class PaymentService
{
    private PaymentMethod $paymentMethod;

    public function setPaymentMethod(PaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay(Order $order)
    {
        $this->paymentMethod->doPayment($order);
    }
}
