<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Auth.profile.index',[
            'page' => 'Profile',
        ]);
    }

    public function edit()
    {
        return view('Auth.profile.edit',[
            'page' => 'Edit profile',
        ]);
    }

    public function editPassword()
    {
        return view('Auth.profile.changePassword',[
            'page' => 'Password'
        ]);
    }
}
