<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function() {
    Route::resource('pasien', App\Http\Controllers\PasienController::class);
    Route::resource('poli', App\Http\Controllers\PoliController::class);
    Route::resource('daftar', App\Http\Controllers\DaftarController::class);
});
Route::get('/laporan-poli', [PoliController::class, 'cetakPdf'])
    ->name('poli.cetakPdf');

Route::get('/laporan-pasien', [PasienController::class, 'cetakPdf'])
    ->name('pasien.cetakPdf');
