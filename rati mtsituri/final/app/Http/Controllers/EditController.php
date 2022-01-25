<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index() {
        $cars = Car::All();
        return view('edit')->with('cars', $cars);
    }

    public function edit(Request $req) {
        if (array_key_exists('delete', $req->all())) {
            $car = Car::where('id', $req->all()['id']);
            $car->delete();
        }

        else {
            //csrf tokeni ro ar gayves
            $data = array_slice($req->all(), 1);
            
            Car::whereId($req->id)->update($data);
        }
        return redirect('edit');
    }
}
