<?php

namespace Src\Decorator\InvoicePrice;

class ServiceInvoicePrice extends InvoicePriceDecorator
{
    public function price(): int
    {
        return parent::price() + 35000;
    }
}
