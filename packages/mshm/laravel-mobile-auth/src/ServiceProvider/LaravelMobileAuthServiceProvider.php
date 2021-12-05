<?php

namespace Mshm\LaravelMobileAuth\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Mshm\LaravelMobileAuth\LaravelMobileAuth;

class LaravelMobileAuthServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind('LaravelMobileAuth',function (){
            return new LaravelMobileAuth();
        });
    }

    public function boot(): void
    {

    }

}
