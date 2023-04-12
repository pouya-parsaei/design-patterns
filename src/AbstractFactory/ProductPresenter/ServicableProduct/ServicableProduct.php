<?php

namespace Src\AbstractFactory\ProductPresenter\ServicableProduct;

use Src\AbstractFactory\ProductPresenter\Product;

class ServicableProduct implements Product
{

    public function title(): string
    {
        return 'Servicable Product Title';
    }

    public function price(): string
    {
        return 'Servicable Product Price';
    }
}
