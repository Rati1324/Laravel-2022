<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        auth()->attempt($request->only('email', 'password'));

        $request->session()->put('email', $request->email);

        return redirect()->route('home');
    }
}