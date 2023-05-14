<?php

namespace Src\FlyWeight\DiscountGenerator;


class DiscountConstraints
{
    public function __construct(
        private \DateTimeImmutable $expirationDate,
        private int                $limit,
        private int                $minAmount,
        private int                $maxAmount,
        private int                $percentage
    )
    {

    }

    public function getExpirationDate(): \DateTimeImmutable
    {
        return $this->expirationDate;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    public function getMaxAmount(): int
    {
        return $this->maxAmount;
    }

    public function getPercentage(): int
    {
        return $this->percentage;
    }


}
