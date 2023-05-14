<?php

namespace Src\Facade\OrderService;

class Order
{

    private function __construct(private int $userId, private int $amount, private array $orderLines, private string $coupon)
    {

    }

    public static function create(int $userId, int $amount, array $orderLines, string $coupon): self
    {
        return new self($userId, $amount, $orderLines, $coupon);
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getOrderLines(): array
    {
        return $this->orderLines;
    }

    public function getCoupon(): int
    {
        return $this->coupon;
    }


}
