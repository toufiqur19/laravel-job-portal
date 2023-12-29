<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function registration ()
    {
        return view('front.login.registration');
    }

    public function login ()
    {
        return view('front.login.login');
    }
}
