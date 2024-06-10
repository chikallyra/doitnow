<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Http\Requests\StoreMissionRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMissionRequest;
use App\Models\MissionCategory;
use App\Models\Reward;
use Illuminate\Support\Facades\Log;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rewards = Reward::all();
        $category = MissionCategory::all();
        dd($category);
        return view('company.dashboardcompany.create', compact('rewards', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'required|min:5',
        'link' => 'nullable',
        'steps' => 'required|min:10',
        'description' => 'required|min:10',
        'max_missionary' => 'required|integer',
        'category_id' => 'required|exists:mission_categories,id',
        'existing_reward' => 'nullable|exists:rewards,id',
        'new_reward' => 'nullable|string|required_without:existing_reward',
        'day_start' => 'required|integer|min:1|max:31',
        'month_start' => 'required|integer|min:1|max:12',
        'year_start' => 'required|integer|min:2024|max:2026',
        'day_end' => 'required|integer|min:1|max:31',
        'month_end' => 'required|integer|min:1|max:12',
        'year_end' => 'required|integer|min:2024|max:2026'
    ]);

    $start_date = sprintf('%04d-%02d-%02d', $request->year_start, $request->month_start, $request->day_start);
    $end_date = sprintf('%04d-%02d-%02d', $request->year_end, $request->month_end, $request->day_end);

    if ($request->hasFile('image')) {
        Log::info('File image detected, attempting to store...');
        try {
            $imagePath = $request->file('image')->store('images/blogs', 'public');
            Log::info('Image stored at: ' . $imagePath);
        } catch (\Exception $e) {
            Log::error('Error storing image: ' . $e->getMessage());
            return redirect()->back()->withErrors(['image' => 'Failed to upload image. Please try again.']);
        }
    } else {
        $imagePath = null;
        Log::info('No image uploaded.');
    }

    if ($request->filled('existing_reward')) {
        $reward = Reward::find($request->existing_reward);
    } else {
        $reward = Reward::create(['reward' => $request->new_reward]);
    }

    Mission::create([
        'company_id' => auth()->user()->company->id,
        'category_id' => $request->category_id,
        'reward_id' => $reward->id,
        'title' => $request->title,
        'description' => $request->description,
        'steps' => $request->steps,
        'link' => $request->link,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'image' => $imagePath,
        'max_missionaries' => $request->max_missionary
    ]);

    return redirect('/dashboard/company')->with('success', 'Mission created successfully');
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMissionRequest  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissionRequest $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}