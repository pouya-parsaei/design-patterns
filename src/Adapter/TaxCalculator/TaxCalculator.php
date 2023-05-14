<?php

namespace Src\Adapter\TaxCalculator;

interface TaxCalculator
{
    public function calculate(int $totalAmount, int $taxPercentage):Tax;
}
