<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function() {
    Route::resource('pasien', App\Http\Controllers\PasienController::class);
    Route::resource('poli', App\Http\Controllers\PoliController::class);
    Route::resource('daftar', App\Http\Controllers\DaftarController::class);
    Route::resource('users', App\Http\Controllers\UsersController::class);
});
