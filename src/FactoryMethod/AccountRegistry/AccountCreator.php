<?php

namespace Src\FactoryMethod\AccountRegistry;

use App\Models\User;
use App\Models\Account as AccountModel;

abstract class AccountCreator
{

    public function registerAccount(User $user, int $balance): AccountModel
    {
        $accountType = $this->getAccount();

        if ($balance < $accountType->minimumBalanceDefinition()) {
            throw new \RuntimeException('Your balance is not enough');
        }

        return AccountModel::create([
            'user_id' => $user->id,
            'interest_rate' => $accountType->interestRate()
        ]);
    }

    abstract protected function getAccount(): Account;
}
