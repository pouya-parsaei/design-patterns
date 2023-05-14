<?php

namespace Src\Facade\OrderService;

class Basket
{
    private array $items;

    public function add(Product $product)
    {
        $this->items[] = $product;
    }

    public function coupon():string
    {
        return 'k23o4i23j4';
    }

    public function items()
    {
        return $this->items;
    }
}
