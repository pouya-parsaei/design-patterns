<?php

namespace Src\FactoryMethod\AccountRegistry;

class GoldAccount implements Account
{

    public function interestRate(): float
    {
        return .25;
    }

    public function minimumBalanceDefinition(): int
    {
        return 1000000000;
    }
}
