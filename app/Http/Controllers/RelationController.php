<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => 'aiueo',
            'konek' => 200
        ]);
    }
}
