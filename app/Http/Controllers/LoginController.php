<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login.index');
    }

    public function submitEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        Session::put('email', $request->email);
        return redirect()->route('login.password');
    }

    public function password()
    {
        if (!Session::has('email')) {
            return redirect()->route('login');
        }
        return view('login.password');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);

        $credentials = [
            'email' => Session::get('email'),
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->type == 'admin') {
                return redirect()->route('admin');
            } elseif (Auth::user()->type == 'company') {
                return redirect()->route('company');
            } else {
                return redirect()->route('platform');
            }
        } else {
            return redirect()->route('login.mail')
                ->with('loginError', 'Email-Address And Password Are Wrong.');
        }
    }
}

