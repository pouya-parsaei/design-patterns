<?php

namespace Src\State\Withdrawal;

abstract class WithdrawalStatus
{
    protected Withdrawal $withdrawal;

    public function setWithdrawal($withdrawal): void
    {
        $this->withdrawal = $withdrawal;
    }

    abstract public function pending();

    abstract public function rejected();

    abstract public function approved();

    abstract public function done();
}

