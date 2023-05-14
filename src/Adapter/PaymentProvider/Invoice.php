<?php

namespace Src\Adapter\PaymentProvider;

class Invoice
{
    private int $amount;

    public function __construct(int $amount)
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException('Amount must be more than 0');
        }

        $this->amount = $amount;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}
