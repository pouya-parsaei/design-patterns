<?php

namespace App\Providers;

use Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Support\ServiceProvider;
use Src\Bridge\PaymentModule\Handlers\ZarinpalHandler;
use Src\Bridge\PaymentModule\Methods\OnlinePayment;

class PaymentModuleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(OnlinePayment::class, function ($app) {
            $connection = resolve(ConnectionFactory::class);
            return new OnlinePayment(new ZarinpalHandler(), $connection->make('mysql'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
