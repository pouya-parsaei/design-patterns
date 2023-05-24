<?php

namespace Src\Observer\Product;

use Src\Observer\Product\Observers\ProductOfferProductPriceObserver;

class Client
{
    public function updatePrice()
    {
        $product = new Product(1000000);
        $product->attachPriceObservers();

        $product->changePrice(15000000);
    }
}
