<?php

namespace Src\AbstractFactory\ProductPresenter\PhysicalProduct;

use Src\AbstractFactory\ProductPresenter\Product;

class PhysicalProduct implements Product
{

    public function title(): string
    {
        return 'Physical product title';
    }

    public function price(): string
    {
        return 'Physical product price';
    }
}
