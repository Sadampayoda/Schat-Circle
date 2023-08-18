<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Auth.dashboard.index',[
            'page' => 'Chatting'
        ]);
    }

    public function updateAplication()
    {
        return view('Auth.dashboard.update',[
            'page' => 'Update Aplikasi',
        ]);
    }

    public function searchAccount()
    {
        return view('Auth.dashboard.search',[
            'page' => 'Search',
        ]);
    }
}
