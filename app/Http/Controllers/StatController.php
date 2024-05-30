<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index() {
        $companies = User::where('type', 1)->get();
        $t_com = User::where('type', 1)->count();

        $missionaries = User::where('type',  0)->get();
        $t_miss = User::where('type', 0)->count();

        return view('stat', compact('companies', 't_com', 'missionaries', 't_miss'));
    }
    // coba
}
