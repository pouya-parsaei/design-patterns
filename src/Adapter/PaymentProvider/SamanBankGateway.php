<?php

namespace Src\Adapter\PaymentProvider;

class SamanBankGateway
{
    public function __construct(private $apiKey)
    {

    }

    public function pay(int $amount): void
    {

    }
}
