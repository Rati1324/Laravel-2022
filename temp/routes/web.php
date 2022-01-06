<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::post('/login', [LogInController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');