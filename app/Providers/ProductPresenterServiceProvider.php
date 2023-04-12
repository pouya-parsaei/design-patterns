<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\AbstractFactory\ProductPresenter\DownloadableProduct\DownloadableProductPresenterFactory;
use Src\AbstractFactory\ProductPresenter\PhysicalProduct\PhysicalProductPresenterFactory;
use Src\AbstractFactory\ProductPresenter\PresenterFactory;
use Src\AbstractFactory\ProductPresenter\ServicableProduct\ServicableProductPresenterFactory;

class ProductPresenterServiceProvider extends ServiceProvider
{

    public $bindings = [
        PresenterFactory::class => PhysicalProductPresenterFactory::class
    ];

}
