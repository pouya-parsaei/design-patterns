<?php

namespace Src\Adapter\TaxCalculator\Calculators;

use Src\Adapter\TaxCalculator\Tax;
use Src\Adapter\TaxCalculator\TaxCalculator;

class LocalCalculator implements TaxCalculator
{

    public function calculate(int $totalAmount, int $taxPercentage): Tax
    {
        $taxAmount = ($totalAmount * $taxPercentage) / 100;

        return new Tax($taxAmount);
    }
}
