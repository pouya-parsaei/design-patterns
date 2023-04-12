<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\AbstractFactory\FormBuilder\FormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\BootstrapFormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\TailwindFormUIFactory;

class FormBuilderServiceProvider extends ServiceProvider
{
    public $bindings = [
        FormUIFactory::class => TailwindFormUIFactory::class
    ];
}
