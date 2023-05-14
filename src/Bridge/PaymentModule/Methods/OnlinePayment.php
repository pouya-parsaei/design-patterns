<?php

namespace Src\Bridge\PaymentModule\Methods;

use Illuminate\Database\Connection;
use Src\Bridge\PaymentModule\Invoice;
use Src\Bridge\PaymentModule\PaymentHandler;
use Src\Bridge\PaymentModule\PaymentMethod;

class OnlinePayment extends PaymentMethod
{
    public function __construct(PaymentHandler $handler, private Connection $connection)
    {
        parent::__construct($handler);
    }

    public function startPay(Invoice $invoice)
    {
//        $this->connection->insert("INSERT INTO payments");

        $this->handler->pay($invoice);
    }
}
