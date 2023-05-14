<?php

namespace Src\Decorator\InvoicePrice;

class InvoiceService
{
    public function calculatePrice(): int
    {
        $invoice = new Invoice();
        $serviceInvoicePrice = new ServiceInvoicePrice($invoice);
        $vatInvoicePrice = new VATInvoicePrice($serviceInvoicePrice);

        return $vatInvoicePrice->price();
    }
}
