<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Genre;

class HomeController extends Controller
{
    public function index() {
        $data = Album::all();
        return view('home')->with('data', $data);
    }
    public function create_many_to_many() {
        $album = Album::first();
        $genre = Genre::first();
        $album->genre()->attach($genre);
    }
    public function insert() {
        return view('insert');
    }
}
