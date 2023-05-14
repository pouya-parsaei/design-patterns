<?php

namespace Src\Adapter\TaxCalculator\Calculators;

class GovernmentTaxCalculatorAPI
{
    public function __construct(string $token)
    {

    }

    public function calculateTax(int $priceInRial): int
    {
        return ($priceInRial * 100) / 15;
    }
}
