<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Adapter\Notification\Notifier;
use Src\Adapter\Notification\TelegramAPI;
use Src\Adapter\Notification\TelegramNotifierAdapter;

class NotificationServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(Notifier::class, function () {
            return new TelegramNotifierAdapter(new TelegramAPI(),'213434');
        });
    }
}
