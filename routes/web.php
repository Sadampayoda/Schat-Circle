<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ValidationUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
});

// Route::group()
Route::middleware('guest')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::get('/login',[ValidationUserController::class,'indexLogin'])->name('login');
        Route::get('/register',[ValidationUserController::class,'indexRegister'])->name('register'); 
    });
});


