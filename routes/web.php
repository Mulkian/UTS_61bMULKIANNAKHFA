<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SewaController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::controller(SewaController::class)->prefix('penyewas')->group(function () {
        Route::get('', 'index')->name('penyewas');
        Route::get('create', 'create')->name('penyewas.create');
        Route::post('store', 'store')->name('penyewas.store');
    });
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


