<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationUserController extends Controller
{
    public function indexLogin()
    {
        
        return view('guest.login',[
            'page' => 'Login user'
        ]);
    }

    public function indexRegister()
    {
        return view('guest.register',[
            'page' => 'Register User'
        ]);
    }
}
