<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('theme/authentication/forgotPassword');
    }

    public function signIn()
    {
        return view('theme/authentication/signIn');
    }

    public function signUp()
    {
        return view('theme/authentication/signUp');
    }
}
