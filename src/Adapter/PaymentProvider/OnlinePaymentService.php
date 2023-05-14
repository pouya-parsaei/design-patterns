<?php

namespace Src\Adapter\PaymentProvider;

class OnlinePaymentService
{
    public function __construct(private OnlineGateway $gateway)
    {

    }

    public function pay(int $amount)
    {
        $this->gateway->startPay(new Invoice($amount));
    }
}
