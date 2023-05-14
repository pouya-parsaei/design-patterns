<?php

namespace Src\Facade\OrderService;

class DiscountService
{

    private function isValid(string $coupon):bool
    {
        return true;
    }

    public function apply(string $coupon):int
    {
        if(!$this->isValid($coupon)){
            throw new \RuntimeException('Invalid coupon');
        }

        return 5000;
    }
}
