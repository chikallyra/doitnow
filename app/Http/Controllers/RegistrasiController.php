<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index () {
        return view('registrasi.index');
    }

    public function company(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:16'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'google_id' => null,
            'type' => 1,
            'phone' => $request->phone
        ]);

        // auth()->login($user);

        return redirect()->route('login')->with('success', 'Account successfully created! Please log in.');
    }

    public function user(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:16'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'google_id' => null,
            'type' => 0,
            'phone' => $request->phone
        ]);

        // auth()->login($user);

        return redirect()->route('login')->with('success', 'Account successfully created! Please log in.');
    }
}
