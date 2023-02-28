<?php

namespace App\Providers;

use App\Services\UnionService;
use Illuminate\Support\ServiceProvider;

class UnionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UnionService::class, function ($app){
            return new UnionService('7-palashpur');
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
