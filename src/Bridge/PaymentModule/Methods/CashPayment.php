<?php

namespace Src\Bridge\PaymentModule\Methods;

use Src\Bridge\PaymentModule\Invoice;
use Src\Bridge\PaymentModule\PaymentMethod;

class CashPayment extends PaymentMethod
{

    public function startPay(Invoice $invoice)
    {
        // cash payments tasks...

        $this->handler->pay($invoice);
    }
}
