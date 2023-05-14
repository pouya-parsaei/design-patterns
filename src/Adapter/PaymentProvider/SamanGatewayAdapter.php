<?php

namespace Src\Adapter\PaymentProvider;

class SamanGatewayAdapter implements OnlineGateway
{
    public function __construct(private SamanBankGateway $samanApi)
    {

    }

    public function startPay(Invoice $invoice): void
    {
        $this->samanApi->pay($invoice->amount());
    }
}
