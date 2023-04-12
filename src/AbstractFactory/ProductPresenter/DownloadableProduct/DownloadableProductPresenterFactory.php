<?php

namespace Src\AbstractFactory\ProductPresenter\DownloadableProduct;

use Src\AbstractFactory\ProductPresenter\PresenterFactory;
use Src\AbstractFactory\ProductPresenter\Product;

class DownloadableProductPresenterFactory implements PresenterFactory
{

    public function createProduct(): Product
    {
        return new DownloadableProduct();
    }

}
