<?php

namespace Src\AbstractFactory\ProductPresenter\PhysicalProduct;

use Src\AbstractFactory\ProductPresenter\PresenterFactory;
use Src\AbstractFactory\ProductPresenter\Product;

class PhysicalProductPresenterFactory implements PresenterFactory
{

    public function createProduct(): Product
    {
        return new PhysicalProduct();
    }
}
