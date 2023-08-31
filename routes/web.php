<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidationUserController;
use App\Models\Chatting;
use App\Models\User;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    Route::controller(DashboardController::class)->group(function(){
        Route::match(['get', 'post'], '/', 'index')->name('chatting');
        Route::get('/update-aplikasi','updateAplication')->name('updateApk');
        Route::get('/search-account','searchAccount')->name('search');
    });
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile','index')->name('profile');
        Route::get('/profile/edit','edit')->name('editProfile');
        Route::get('/profile/edit/password','editPassword')->name('changePassword');
    });
});

// Route::group()
Route::middleware(['guest'])->group(function(){
    Route::prefix('auth')->group(function(){
        Route::controller(ValidationUserController::class)->group(function(){
            Route::get('/login','indexLogin')->name('login');
            Route::get('/register','indexRegister')->name('register'); 
            Route::post('/registerValidation', 'createAccountUser')->name('newAccount');
        });
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

