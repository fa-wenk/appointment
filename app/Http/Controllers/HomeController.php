<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function new_user()
    {
        return view('auth.form');
    }

    public function otp(Request $request)
    {
        $kontak = $request->get('phone_number');
        return view('auth.otp', compact('kontak'));
    }
}
