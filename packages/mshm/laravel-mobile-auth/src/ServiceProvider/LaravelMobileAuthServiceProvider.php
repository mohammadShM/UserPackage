<?php

namespace Mshm\LaravelMobileAuth\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Mshm\LaravelMobileAuth\LaravelMobileAuth;

class LaravelMobileAuthServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind('LaravelMobileAuth', function () {
            return new LaravelMobileAuth();
        });
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-mobile-auth.php', 'LaravelMobileAuth');
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'LaravelMobileAuth');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // for published config when by user want this package publish
        $this->publishes([
            __DIR__ . '/../config/laravel-mobile-auth.php' => config_path('LaravelMobileAuth.php'),
        ], 'laravel-mobile-auth-config');
        // for published views when by user want this package publish
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/LaravelMobileAuth'),
        ], 'laravel-mobile-auth-views');
        // for published migration when by user want this package publish
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'laravel-mobile-auth-migrations');
        // for published css when by user want this package publish
        $this->publishes([
            __DIR__ . '/../pubic/css' => public_path('vendor/LaravelMobileAuth/css'),
        ], 'laravel-mobile-auth-css');
    }

}
