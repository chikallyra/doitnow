<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Http\Requests\StoreMissionRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMissionRequest;
use App\Models\MissionCategory;
use App\Models\Reward;
use App\Models\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request){
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|min:5',
            'link' => 'nullable',
            'steps' => 'required|array',
            'steps.*.type' => 'required|string|in:text,file,hidden', // Validasi untuk jenis langkah-langkah
            'steps.*.description' => 'required|string', // Validasi untuk deskripsi langkah-langkah
            'description' => 'required|min:10',
            'max_missionaries' => 'required|integer',
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
    
        // Proses langkah-langkah
        $steps = $request->input('steps');
        $missionSteps = [];
        foreach ($steps as $step) {
            $missionSteps[] = [
                'description' => $step['description'],
                'type' => $step['type'],
                // 'label' => $step['label'], // Uncomment this line if label is needed
            ];
        }
    
        $mission = Mission::create([
            'company_id' => auth()->user()->company->id,
            'category_id' => $request->category_id,
            'reward_id' => $reward->id,
            'title' => $request->title,
            'description' => $request->description,
            'steps' => json_encode($missionSteps), // Simpan langkah-langkah sebagai JSON
            'link' => $request->link,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'image' => $imagePath,
            'max_missionaries' => $request->max_missionaries
        ]);

        Notification::create([
            'type' => 'App\Notifications\NewMissionNotification',
            'notifiable_id' => $mission->company_id, // Sesuaikan dengan user yang akan menerima notifikasi (misalnya, perusahaan)
            'notifiable_type' => 'App\Models\User',
            'data' => json_encode([
                'title' => 'New Mission Created',
                'message' => 'A new mission has been created: ' . $mission->title,
            ]),
            'expires_at' => Carbon::now()->addDays(3),
        ]);
    
        return redirect('/dashboard/company')->with('success', 'Mission created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission, $id)
    {
        $mission = Mission::where('id', $id)->with('category', 'reward')->firstOrFail();
        $steps = json_decode('steps');
        return view('company.dashboardcompany.show', compact('mission', 'steps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission, $id)
    {
        $mission = Mission::where('id', $id)->with('category', 'reward')->firstOrFail();
        $category = MissionCategory::pluck('name', 'id'); 
        $rewards = Reward::pluck('reward', 'id');

        list($year_start, $month_start, $day_start) = explode('-', $mission->start_date);
        list($year_end, $month_end, $day_end) = explode('-', $mission->end_date);

        $day_start = (int) $day_start;
        $month_start = (int) $month_start;
        $year_start = (int) $year_start;
        $day_end = (int) $day_end;
        $month_end = (int) $month_end;
        $year_end = (int) $year_end;

        return view('company.dashboardcompany.edit', compact('mission', 'category', 'rewards', 'day_start', 'month_start', 'year_start', 'day_end', 'month_end', 'year_end'));
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
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|min:5',
            'link' => 'nullable',
            'steps' => 'required|array',
            'steps.*.type' => 'required|string|in:text,file,hidden', // Validasi untuk jenis langkah-langkah
            'steps.*.description' => 'required|string', // Validasi untuk deskripsi langkah-langkah
            'description' => 'required|min:10',
            'max_missionaries' => 'required|integer',
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

        // Jika ada file gambar di-upload, simpan ke storage dan dapatkan path-nya
        if ($request->hasFile('image')) {
            Log::info('File image detected, attempting to store...');
            try {
                // Hapus gambar lama jika ada
                if ($mission->image) {
                    Storage::disk('public')->delete($mission->image);
                    Log::info('Old image deleted: ' . $mission->image);
                }

                // Simpan gambar baru
                $imagePath = $request->file('image')->store('images/blogs', 'public');
                Log::info('Image stored at: ' . $imagePath);
            } catch (\Exception $e) {
                Log::error('Error storing image: ' . $e->getMessage());
                return redirect()->back()->withErrors(['image' => 'Failed to upload image. Please try again.']);
            }
        } else {
            $imagePath = $mission->image;
            Log::info('No new image uploaded.');
        }

        if ($request->filled('existing_reward')) {
            $reward = Reward::find($request->existing_reward);
        } else {
            $reward = Reward::create(['reward' => $request->new_reward]);
        }

        // Proses langkah-langkah
        $steps = $request->input('steps');
        $missionSteps = [];
        foreach ($steps as $step) {
            $missionSteps[] = [
                'description' => $step['description'],
                'type' => $step['type'],
            ];
        }

        $mission->update([
            'category_id' => $request->category_id,
            'reward_id' => $reward->id,
            'title' => $request->title,
            'description' => $request->description,
            'steps' => json_encode($missionSteps), // Simpan langkah-langkah sebagai JSON
            'link' => $request->link,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'image' => $imagePath,
            'max_missionaries' => $request->max_missionaries
        ]);

        return redirect()->route('company')->with('success', 'Mission updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect('/dashboard/company')->with('success', 'Mission has been deleted!');
    }
}