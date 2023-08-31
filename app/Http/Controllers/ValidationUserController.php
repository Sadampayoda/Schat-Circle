<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidasiUserRequest;

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

    public function createAccountUser(ValidasiUserRequest $request)
    {
        $encryPassword = bcrypt($request->password);
        return redirect()->route('chatting');
       
    }

    public function validasionUserForInAplication(ValidasiUserRequest $request)
    {
        
    }
}
