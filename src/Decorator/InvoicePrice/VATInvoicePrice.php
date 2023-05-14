<?php

namespace Src\Decorator\InvoicePrice;

class VATInvoicePrice extends InvoicePriceDecorator
{
    public function price(): int
    {
        return parent::price() + (parent::price() * 0.09);
    }
}
