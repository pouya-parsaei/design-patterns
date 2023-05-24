<?php

namespace Src\Observer\Product\Observers;

use SplSubject;

class ProductPriceChangeLogger implements \SplObserver
{

    public function update(SplSubject $subject): void
    {
        // do something
    }
}
