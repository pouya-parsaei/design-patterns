<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Solid\OCP\EncoderFactory;
use Src\Solid\OCP\EncoderFactoryInterface;
use Src\Solid\OCP\JsonEncoder;
use Src\Solid\OCP\XmlEncoder;

class EncoderServiceProvider extends ServiceProvider
{
    public $bindings = [
        EncoderFactoryInterface::class => EncoderFactory::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(EncoderFactory::class, function ($app) {
            return new EncoderFactory();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(EncoderFactoryInterface $encoderFactory): void
    {
        $encoderFactory->addEncoderFactory('json', function () {
            return new JsonEncoder();
        });

        $encoderFactory->addEncoderFactory('xml', function () {
            return new XmlEncoder();
        });
    }
}
