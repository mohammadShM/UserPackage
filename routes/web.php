<?php

use Illuminate\Support\Facades\Route;
use Mshm\LaravelMobileAuth\LaravelMobileAuth;

Route::get('/', function () {
//    $auth = resolve('LaravelMobileAuth')->doSomething();
//    dd($auth);
    $x = LaravelMobileAuth::doSomethingElse();
    dd($x);
//    return view('welcome');
});
