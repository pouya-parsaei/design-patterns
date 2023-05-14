<?php

namespace Src\Composite\Basket;

class Basket
{
    private array $items = [];

    public function add(ProductItem $item)
    {
        $this->items[] = $item;
    }

    public function totalPrice(): int
    {
        $total = 0;

        foreach ($this->items as $productItem) {
            $total += $productItem->price();
        }

        return $total;
    }
}
