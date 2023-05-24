<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthCustomController;
use App\Http\Controllers\GoogleController;



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
Route::get('laravel', function () {
    return view('ports.laravel');
})->name('laravel');

Route::get('/', function () {
    return view('welcome');
});

Route::get('luthfi-home', function () {
    return view('home');
});

// Route::resource('guests', GuestController::class);

Route::controller(GuestController::class)->group(function () {
    Route::get('home', 'create')->name('guests.add');
    Route::get('home', 'show')->name('guests.show');
    Route::post('home/{guest}', 'store')->name('guests.store');
    Route::get('home/edit/{guest}', 'edit')->name('guests.edit');
    Route::put('home/update/{guest}', 'update')->name('guests.update');
    Route::delete('home/delete/{guest}', 'destroy')->name('guests.delete');
});

// Home Routes
// Route::get('auth', [HomeController::class, 'create'])->name('login');
Route::get('home/dashboard/downloadcv', [HomeController::class, 'cvdwldr']);
Route::get('home/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Auth Routes
Route::get('auth-user', [AuthCustomController::class, 'index']);
Route::post('auth-user/login', [AuthCustomController::class, 'login'])->name('login.user');

Route::get('auth', [AuthCustomController::class, 'indexCv']);
Route::post('auth/login', [AuthCustomController::class, 'loginCv'])->name('login');
Route::get('auth/logout', [AuthCustomController::class, 'logout']);

// Google Redirect
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'googleCallBackHandler'])->name('google.callback');
Route::get('auth/google/callback/cv', [GoogleController::class, 'googleCallBackHandlerCV'])->name('google.callback.cv');

// Reg Routes
Route::get('home/reg', [AuthCustomController::class, 'register']);
Route::post('home/reg/create', [AuthCustomController::class, 'create'])->name('create');