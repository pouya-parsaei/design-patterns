<?php

namespace Src\Decorator\InvoicePrice;

class Invoice implements InvoicePrice
{

    public function price(): int
    {
        return 1000000;
    }
}
