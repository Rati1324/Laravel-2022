<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\InsertController;


Route::prefix('prefix')->group(function () {
    Route::get('/page', function() {
        return view('home');
    })->name('page');

    Route::get('/page2/{id?}', function($id=2) {
        return "id: " . $id;
    });
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::post('/login', [LogInController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/insert_genre', [InsertController::class, 'insert_genre_page']);
Route::post('/insert_genre', [InsertController::class, 'genre'])->name('insert_genre');

Route::get('/insert_artist', [InsertController::class, 'insert_artist_page']);
Route::post('/insert_artist', [InsertController::class, 'artist'])->name('insert_artist');

Route::get('/test', [InsertController::class, 'test']);
