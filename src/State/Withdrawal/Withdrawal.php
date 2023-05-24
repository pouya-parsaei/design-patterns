<?php

namespace Src\State\Withdrawal;

use Src\State\Withdrawal\WithdrawalStatuses\Pending;

class Withdrawal
{
    private WithdrawalStatus $status;

    public function __construct(private int $amount)
    {
        $this->transitTo(new Pending());
    }

    public function transitTo(WithdrawalStatus $status)
    {
        $this->status = $status;

        $this->status->setWithdrawal($this);
    }
}
