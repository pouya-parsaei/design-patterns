<?php

namespace Src\Strategy\Payment;

interface PaymentMethod
{
    public function doPayment(Order $order);
}
