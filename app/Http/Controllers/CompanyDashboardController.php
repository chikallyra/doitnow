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
    public function index(Request $request)
{
    // Assuming you are using Laravel's authentication
    $user = auth()->user();

    // Fetch the company IDs associated with the logged-in user
    $companyIds = $user->companies()->pluck('companies.id')->toArray();

    // Debugging: Check if the company IDs are correctly retrieved
    if (empty($companyIds)) {
        dd('No company IDs found for the authenticated user.');
    }

    // Retrieve missions that belong to the logged-in user's companies
    $missions = Mission::with('reward', 'category')
                        ->whereIn('company_id', $companyIds)
                        ->get();

    // Debugging: Check if missions are retrieved
    if ($missions->isEmpty()) {
        dd('No missions found for the company IDs: ' . implode(', ', $companyIds));
    }

    // Format the dates
    foreach ($missions as $mission) {
        $mission->formatted_start_date = \Carbon\Carbon::parse($mission->start_date)->format('d M');
        $mission->formatted_end_date = \Carbon\Carbon::parse($mission->end_date)->format('d M');
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
}
