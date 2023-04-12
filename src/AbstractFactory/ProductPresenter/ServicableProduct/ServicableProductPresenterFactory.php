<?php

namespace Src\AbstractFactory\ProductPresenter\ServicableProduct;

use Src\AbstractFactory\ProductPresenter\PresenterFactory;
use Src\AbstractFactory\ProductPresenter\Product;

class ServicableProductPresenterFactory implements PresenterFactory
{

    public function createProduct(): Product
    {
        return new ServicableProduct();
    }
}
