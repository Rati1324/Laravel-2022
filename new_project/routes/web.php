<?php

use Illuminate\Support\Facades\Route;
use App\Models\Album;
use App\Models\Artist;
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
    $data = Album::all();
    dd($data[0]->artist->name);
    // return view('welcome');
});
