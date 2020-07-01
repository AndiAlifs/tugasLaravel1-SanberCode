<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function welcome(Request $request)
    {   
        dd($request);
        return view("welcam");
    }
}
