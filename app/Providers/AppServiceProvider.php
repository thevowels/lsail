<?php

namespace App\Providers;

use App\Services\TestService;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\Attributes\Test;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);
        $this->app->bind(TestService::class, function (Application $app) {
            return new TestService($app->make('App\Services\RequireClass'));
        });
    }
}
