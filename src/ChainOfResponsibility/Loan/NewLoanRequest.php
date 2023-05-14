<?php

namespace Src\ChainOfResponsibility\Loan;

class NewLoanRequest
{
    public function __construct(
        private int $userId,
        private int $amount,
        private int $yearsToPayBack
    )
    {

    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getYearsToPayBack(): int
    {
        return $this->yearsToPayBack;
    }


}
