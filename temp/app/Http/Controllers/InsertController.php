<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\Album;

class InsertController extends Controller
{
    public function insert_genre_page() {
        return view('insert.genre');
    }
    public function genre(Request $req) {
        // dd($req->input());
        $g = new Genre;
        $g->name = $req->genre_name;
        echo $g->save();
    }

    public function insert_artist_page() {
        return view('insert.artist');
    }

    public function artist(Request $req) {
        $a = new Artist;
        $a->name = $req->artist_name;
        echo $a->save();
    }

    public function test() {
        $albums = Album::First()->get();
        $artists = Artist::All();
        dd($albums);
        // return view('test')->with('data', $albums);
    }
}
