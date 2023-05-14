<?php

namespace Src\Adapter\TaxCalculator\Calculators;

use Src\Adapter\TaxCalculator\Tax;
use Src\Adapter\TaxCalculator\TaxCalculator;

class GovernmentCalculator implements TaxCalculator
{

    public function __construct(private GovernmentTaxCalculatorAPI $calculatorAPI)
    {

    }

    public function calculate(int $totalAmount, int $taxPercentage): Tax
    {
        $calculatedTaxInRial = $this->calculatorAPI->calculateTax($totalAmount * 10);

        return new Tax((int)round($calculatedTaxInRial / 10));
    }
}
