<?php

namespace App\Services;

use App\Models\Account;
use App\Models\User;
use Src\FactoryMethod\AccountRegistry\AccountCreator;

class AccountService
{
    public function __construct(private AccountCreator $accountRegistry)
    {

    }

    public function register(User $user, int $balance): Account
    {
        return $this->accountRegistry->registerAccount($user, $balance);
    }
}
