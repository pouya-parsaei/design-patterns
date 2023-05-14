<?php

namespace Src\Adapter\PaymentProvider;

interface OnlineGateway
{
    public function startPay(Invoice $invoice):void;
}
