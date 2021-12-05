<?php

namespace Mshm\LaravelMobileAuth\Facade;

use Illuminate\Support\Facades\Facade;
use Mshm\LaravelMobileAuth\LaravelMobileAuth;

/**
 * Class LaravelMobileAuthFacade
 *
 * @method static string doSomething()
 * @method static string doSomethingElse()
 *
 * @see \Mshm\LaravelMobileAuth\
 * @package Mshm\LaravelMobileAuth\Facade
 */

class LaravelMobileAuthFacade extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return "LaravelMobileAuth";
    }

}
