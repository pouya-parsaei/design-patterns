<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Mediator\EventDispatcher\EventDispatcher;
use Src\Mediator\EventDispatcher\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $eventDispatcher = new EventDispatcher();
        $eventDispatcher->attach('user:deleted', new Logger());

        $this->app->singleton(EventDispatcher::class, $eventDispatcher);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
