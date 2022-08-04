<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\StarterController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





//admin access
Route::middleware('auth')->group(function()
{
        //starter
    // Route::get('/starter', function () {
    //     return view('starter');
    // })->name('starter');

    Route::get('/starter' , [StarterController::class , 'index'])->name('starter');

        //data
    Route::get('/data',[EmployeeController::class , 'index'])->name('data');
        //modal
    Route::get('/generate',[EmployeeController::class , 'index'])->name('generate');
    Route::post('/generate/store',[EmployeeController::class , 'store'])->name('store');


    Route::put('/generate/update',[EmployeeController::class , 'update'])->name('update');
    Route::put('/generate/remove',[EmployeeController::class , 'remove'])->name('remove');

    Route::get('/generate/search',[EmployeeController::class , 'search'])->name('search');

    // Route::get('/generate/inactive',[EmployeeController::class , 'countInactiveEmployee'])->name('inactive');



});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// GOOGLE login
Route::get('/login/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('/login/google/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

// FACEBOOK login
Route::get('/login/facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login.facebook');

Route::get('/login/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
});
