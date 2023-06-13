<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthCustomController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DashboardController;



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

Route::get('home', function () {
    return view('home');
})->middleware('listing.guest');

// Route::resource('guests', GuestController::class);

Route::controller(GuestController::class)->group(function () {
    Route::get('home', 'create')->name('guests.add');
    Route::get('home', 'show')->name('guests.show');
    Route::post('home/{guest}', 'store')->name('guests.store');
    Route::get('home/edit/{guest}', 'edit')->name('guests.edit');
    Route::put('home/update/{guest}', 'update')->name('guests.update');
    Route::delete('home/delete/{guest}', 'destroy')->name('guests.delete');
});

// Dashboard Routes
// Route::get('auth', [HomeController::class, 'create'])->name('login');
Route::get('home/dashboard/downloadcv', [DashboardController::class, 'cvdwldr'])->name('downloadcv')->middleware('islogged.in');
Route::get('home/dashboard', [DashboardController::class, 'jumpToDashboard'])->name('dashboard')->middleware('islogged.in');
Route::get('home/messages', [DashboardController::class, 'jumpToMessages'])->name('messages')->middleware('islogged.in');
Route::get('home/file_manager', [DashboardController::class, 'jumpToFileManager'])->name('file_manager')->middleware('islogged.in');
Route::get('home/settings', [DashboardController::class, 'jumpToSettings'])->name('settings')->middleware('islogged.in');
Route::get('home/dashboard/add_item', [DashboardController::class, 'jumpToDashboardAddItem'])->name('dashboard.add.item')->middleware('islogged.in');

// Auth Routes
Route::get('auth-user', [AuthCustomController::class, 'index'])->middleware('islogged.in.reverse');
Route::post('auth-user/login', [AuthCustomController::class, 'login'])->name('login.user')->middleware('islogged.in.reverse');
Route::get('auth-user/logout', [AuthCustomController::class, 'logout'])->name('logout.account');

Route::get('auth', [AuthCustomController::class, 'indexCv'])->middleware('islogged.in.reverse');
Route::post('auth/login', [AuthCustomController::class, 'loginCv'])->name('login')->middleware('islogged.in.reverse');

// Google Redirect
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'googleCallBackHandler'])->name('google.callback');
Route::get('auth/google/callback/cv', [GoogleController::class, 'googleCallBackHandlerCV'])->name('google.callback.cv');

// Reg Routes
Route::get('home/reg', [AuthCustomController::class, 'register']);
Route::post('home/reg/create', [AuthCustomController::class, 'create'])->name('create');

// Layer 2: Items Routes
Route::resource('home/dashboard/items', ItemController::class);