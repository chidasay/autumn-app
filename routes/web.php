<?php

use App\Http\Controllers\Auth\RegisterController;  
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');
