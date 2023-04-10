<?php

namespace Src\FactoryMethod\AccountRegistry;

class VIPAccount implements Account
{

    public function interestRate(): float
    {
        return .23;
    }

    public function minimumBalanceDefinition(): int
    {
        return 50000000;
    }

}
