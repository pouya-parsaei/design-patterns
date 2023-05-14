<?php

namespace Src\FlyWeight\DiscountGenerator;

class DiscountFactory
{
    private array $constraints;
    private array $discounts;

    public function createDiscount(
        string             $code,
        int                $userId,
        \DateTimeImmutable $expirationDate,
        int                $limit,
        int                $minAmount,
        int                $maxAmount,
        int                $percentage
    )
    {
        $constraint = $this->createConstraint($expirationDate, $limit, $minAmount, $maxAmount, $percentage);

        $discount = new Discount($code, $userId, $constraint);
        $this->discounts[] = $discount;

        return $discount;
    }

    private function createConstraint(
        \DateTimeImmutable $expirationDate,
        int                $limit,
        int                $minAmount,
        int                $maxAmount,
        int                $percentage
    ): DiscountConstraints
    {
        $key = $this->createKey(get_defined_vars());

        if (!isset($this->constraints[$key])) {
            $this->constraints[$key] = new DiscountConstraints($expirationDate, $limit, $minAmount, $maxAmount, $percentage);
        }

        return $this->constraints[$key];
    }

    private function createKey(array $data): string
    {
        ksort($data);

        return md5(implode('_', $data));
    }

    public function getDiscountsList(): array
    {
        return $this->discounts;
    }
}
