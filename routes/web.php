<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidationUserController;
use App\Models\Chatting;
use App\Models\User;

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

Route::middleware('guest')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('chatting');
    Route::get('/update-aplikasi',[DashboardController::class,'updateAplication'])->name('updateApk');
    Route::get('/search-account',[DashboardController::class,'searchAccount'])->name('search');
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');
    Route::get('/profile/edit',[ProfileController::class,'edit'])->name('editProfile');
    Route::get('/profile/edit/password',[ProfileController::class,'editPassword'])->name('changePassword');
});

// Route::group()
Route::middleware('guest')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::get('/login',[ValidationUserController::class,'indexLogin'])->name('login');
        Route::get('/register',[ValidationUserController::class,'indexRegister'])->name('register'); 
    });
});


Route::get('/Relasi', function () {
    $user = User::find(9);
    // dd($user->sosialmedia) ;
    $chatting = $user->chatting;
    return response()->json([
        'data' => $chatting
    ]);
});

