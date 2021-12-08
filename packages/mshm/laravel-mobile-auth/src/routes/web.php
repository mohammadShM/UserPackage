<?php

use Illuminate\Support\Facades\Route;

//use Mshm\LaravelMobileAuth\Http\Controllers\AuthController;
// Route::get('/mobile-auth', [AuthController::class, 'index']);

Route::namespace('Mshm\LaravelMobileAuth\Http\Controllers')->group(function(){
    Route::get('/mobile-auth','AuthController@index');
});
