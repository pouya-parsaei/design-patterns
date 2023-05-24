<?php

namespace Src\Observer\Product\Observers;

use SplSubject;

class ProductOfferProductPriceObserver implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        $productNewPrice = $subject->price();

        // do something
    }
}
