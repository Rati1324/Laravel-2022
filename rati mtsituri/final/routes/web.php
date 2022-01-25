<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\EditController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/view', [ViewController::class, 'index'])->name('view');
Route::get('/insert', [InsertController::class, 'index'])->name('insert');
Route::post('/insert', [InsertController::class, 'insert'])->name('insert');

Route::get('/edit', [EditController::class, 'index'])->name('edit');
Route::post('/edit', [EditController::class, 'edit'])->name('edit');

Route::get('/filter_year', [ViewController::class, 'filter_year'])->name('filter_year');
Route::get('/filter_levy', [ViewController::class, 'filter_levy'])->name('filter_levy');
