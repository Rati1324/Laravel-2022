<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ViewController extends Controller
{
    public function index() {
        $cars = Car::All();
        return view('view')->with('cars', $cars);
    }

    public function filter_levy(Request $req) {
        $cars = Car::where('levy', $req->all()['levy'])->all();
        return view('view')->with('cars', $cars);
    }

    public function filter_year(Request $req) {
        $cars = Car::where('year', $req->all()['year']);
        return view('view')->with('cars', $cars);
    }
}
