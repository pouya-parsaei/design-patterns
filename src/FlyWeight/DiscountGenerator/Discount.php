<?php

namespace Src\FlyWeight\DiscountGenerator;


class Discount
{
    public function __construct(
        private string              $code,
        private ?int                $userId,
        private DiscountConstraints $constraints
    )
    {

    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getConstraints(): DiscountConstraints
    {
        return $this->constraints;
    }


}
