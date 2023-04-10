<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Solid\LSP\FileService;
use Src\Solid\LSP\FileServiceInterface;

class FileServiceProvider extends ServiceProvider
{
    public $bindings = [
        FileServiceInterface::class => FileService::class
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
