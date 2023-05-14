<?php

namespace Src\Bridge\PaymentModule;

interface PaymentHandler
{
    public function pay(Invoice $invoice);
}
