<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class InsertController extends Controller
{
    public function index() {
        return view('insert');
    }

    public function insert(Request $req) {
        $c = new Car;
        $c->name = $req->name;
        $c->model = $req->model;
        $c->year = $req->year;
        $c->engine = $req->engine;
        $c->levy = $req->levy;
        $c->price = $req->price;
        $c->save();
        return redirect('view');
    }
}
