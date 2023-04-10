<?php

namespace Src\FactoryMethod\AccountRegistry;

class GeneralAccount implements Account
{

    public function interestRate(): float
    {
        return .10;
    }

    public function minimumBalanceDefinition(): int
    {
        return 100000;
    }

}
