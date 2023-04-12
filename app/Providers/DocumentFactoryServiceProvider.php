<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\AbstractFactory\DocumentFactory\DocumentFactory;
use Src\AbstractFactory\DocumentFactory\HTMLDocument\HTMLDocumentFactory;

class DocumentFactoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        DocumentFactory::class => HTMLDocumentFactory::class
    ];
}
