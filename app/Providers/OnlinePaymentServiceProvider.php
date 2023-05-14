<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Adapter\PaymentProvider\OnlineGateway;
use Src\Adapter\PaymentProvider\SamanBankGateway;
use Src\Adapter\PaymentProvider\SamanGatewayAdapter;
use Src\Adapter\PaymentProvider\ZarinpalProvider;

class OnlinePaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(OnlineGateway::class, function () {
            return new SamanGatewayAdapter(new SamanBankGateway('123'));
        });
    }
}
