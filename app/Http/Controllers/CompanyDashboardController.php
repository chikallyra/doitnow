<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyDashboardController extends Controller
{
    public function index () {
        return view('dashboardcompany.index');
    }

    // create
    public function create()
    {
        return view('dashboardcompany.create', [
        ]);
    }
}
