<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruMenuController;
use App\Http\Controllers\muridMenuController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\telatController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('gurumenu', guruMenuController::class);
Route::resource('muridmenu', muridMenuController::class);
Route::resource('telat', telatController::class);

Route::post('/telat/kirim', [telatController::class, 'kirim'])->name('telat.kirim');


// Login Routes
Route::get('/login', [loginController::class, 'index'])->name('login.form');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');
