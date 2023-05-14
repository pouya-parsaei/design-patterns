<?php

namespace Src\Composite\Basket;

class ProductPackage implements ProductItem
{
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function price(): int
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->price();
        }

        return $total;
    }
}
