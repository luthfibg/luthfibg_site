<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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