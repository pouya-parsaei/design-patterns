<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\FactoryMethod\Publisher\LinkedinPublisherFactory;
use Src\FactoryMethod\Publisher\MessagePublisher;

class PublisherServiceProvider extends ServiceProvider
{
    public $bindings = [
        MessagePublisher::class => LinkedinPublisherFactory::class
    ];
}
