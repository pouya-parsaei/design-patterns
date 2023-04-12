<?php

namespace Src\AbstractFactory\ProductPresenter\DownloadableProduct;

use Src\AbstractFactory\ProductPresenter\Product;

class DownloadableProduct implements Product
{

    public function title(): string
    {
        return 'downloadable product title';
    }

    public function price(): string
    {
        return 'downloadable product price';
    }
}
