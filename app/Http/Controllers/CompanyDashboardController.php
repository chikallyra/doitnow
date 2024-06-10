<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Mission;
use App\Models\Missionary;
use App\Models\MissionCategory;
use App\Models\Reward;
use Illuminate\Http\Request;

class CompanyDashboardController extends Controller
{
    public function index () {
        $missions = Mission::with('reward', 'category')->get();
        
        foreach($missions as $mission){
            // $mission->start_date = \Carbon\Carbon::parse($mission->start_date)->format('d M');
            // $mission->end_date = \Carbon\Carbon::parse($mission->end_date)->format('d M');
        }
        return view('company.index', compact('missions'));
    }

    // create
    public function create()
    {
        $categories = MissionCategory::pluck('name', 'id');
        $rewards = Reward::all();
        return view('company.dashboardcompany.create', compact('categories', 'rewards'));
    }

    // show
    public function show(Company $company)
    {
        return view('company.dashboardcompany.show');
    }

    // edit
    public function edit()
    {
        return view('company.dashboardcompany.edit');
    }


}
