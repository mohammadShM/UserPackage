<?php

use Illuminate\Support\Facades\Route;
use Mshm\LaravelMobileAuth\LaravelMobileAuth;

Route::get('/', function () {
    $x = LaravelMobileAuth::doSomethingElse();
    dd($x);
//    return view('welcome');
});
