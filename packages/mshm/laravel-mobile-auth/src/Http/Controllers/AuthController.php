<?php

namespace Mshm\LaravelMobileAuth\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AuthController extends BaseController
{

    public function index(): Factory|View|Application
    {
        return view('LaravelMobileAuth::auth');
    }

}
