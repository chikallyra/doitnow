<?php

namespace App\Http\Controllers;

use App\Models\Company;

use App\Models\CompanyUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index () {
        return view('registrasi.index');
    }

    public function regisCompany() {
        return view('registrasi.index');
    }

    public function regisMiss() {
        return view('registrasi.missionary');
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

        $company = Company::create([
            'user_id' => $user->id,
            'name' => $request->name
        ]);

        $company->users()->attach($user->id, ['role' => 0]);

        // CompanyUser::create([
        //     'user_id' => $user->id,
        //     'company_id' => $company->id,
        //     'role' => 0
        // ]);

        return redirect()->route('login.mail')->with('success', 'Account successfully created! Please log in.');
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

        return redirect()->route('login.mail')->with('success', 'Account successfully created! Please log in.');
    }
}
