<?php

namespace Src\Adapter\TaxCalculator;

class Tax
{
    public function __construct(private int $amount)
    {

    }

    public function getAmount(): int
    {
        return $this->amount;
    }

}
