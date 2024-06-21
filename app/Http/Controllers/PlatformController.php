<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Missionary;
use App\Models\User;
use App\Models\UserMission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\TimeAgoHelper;
use App\Models\MissionCategory;
use App\Models\UserReward;
use Illuminate\Support\Facades\Storage;

class PlatformController extends Controller
{
    public function index() {
        $missions = Mission::with('reward', 'category')->latest()->paginate(5);
        $missions = Mission::with('reward', 'category')->get();
        $missions = Mission::with('reward', 'category')->orderBy('created_at', 'desc')->get(); 
    
        foreach ($missions as $mission) {
            $start_date = Carbon::parse($mission->start_date)->format('d M Y');
            $end_date = Carbon::parse($mission->end_date)->format('d M Y');
    
            $time_ago = TimeAgoHelper::timeAgo($mission->start_date, $mission->end_date);
            $mission->time_ago = $time_ago;
    
            $mission->end_time_unix = Carbon::parse($mission->end_date)->timestamp;
    
            $mission->formatted_start_date = $start_date;
            $mission->formatted_end_date = $end_date;
        }
        $categories = MissionCategory::all();

        $missionaryId = auth()->user()->missionary->id; // Assuming the logged-in user is a missionary
        $totalReward = UserReward::where('missionary_id', $missionaryId)
            ->join('rewards', 'user_rewards.reward_id', '=', 'rewards.id')
            ->sum('rewards.reward');

        return view('platform.index', compact('missions', 'categories', 'totalReward'));
    }
    
    public function misi($id) {
        $mission = Mission::with('company', 'reward', 'category')->findOrFail($id);
        $mission->steps = json_decode($mission->steps, true);

        $userId = auth()->id();
        $userMission = UserMission::where('missionary_id', Missionary::where('user_id', $userId)->first()->id)
        ->where('mission_id', $mission->id)
        ->first();
    
        $isMissionCompleted = $userMission && $userMission->mission_complete_at !== null;
        return view('platform.misi', compact('mission', 'isMissionCompleted'));
    }

    public function search(Request $request)
    {
        if($request->ajax()) {
            $missions = Mission::where('title', 'LIKE', '%'.$request->keyword.'%')
                        ->orWhere('description', 'LIKE', '%'.$request->keyword.'%')
                        ->get();
            
            $result = view('platform.search-result', compact('missions'))->render();
            
            return response()->json(['html' => $result]);
        }
        return response()->json(['html' => '']);
    }

    public function addfriend() {
        return view('platform.addfriend');
    }

    public function withdraw() {
        return view('platform.withdraw');
    }

    public function history() {
        $user = auth()->user();
        if ($user && $user->missionary) {
            $history = $user->missionary->missions; // Mengambil misi melalui relasi Missionary
            return view('platform.history', compact('history'));
        } else {
            return redirect('/login'); // Atau halaman yang sesuai jika pengguna tidak login
        }
    }

    public function notif(Request $request)
    {
        $notifications = auth()->user()->notifications()->paginate(10);

        foreach ($notifications as $notification) {
            $notification->data = is_array($notification->data) ? $notification->data : json_decode($notification->data, true);
        }

        if ($request->ajax()) {
            return view('platform.partials.notifications', compact('notifications'))->render();
        }

        return view('platform.notif', compact('notifications'));
    }

    
    // public function notif() {
    //     $notifications = auth()->user()->notifications;
    //     return view('platform.notif', ['notifications' => $notifications]);
    // }

    public function mission_c(Request $request)
    {
        $query = Mission::with('reward', 'category')->orderBy('created_at', 'desc');

        if ($request->ajax()) {
            if ($request->has('category_id') && $request->category_id != 'all') {
                $query->where('category_id', $request->category_id);
            }

            $missions = $query->paginate(10);

            foreach ($missions as $mission) {
                $start_date = Carbon::parse($mission->start_date)->format('d M Y');
                $end_date = Carbon::parse($mission->end_date)->format('d M Y');

                $time_ago = TimeAgoHelper::timeAgo($mission->start_date, $mission->end_date);
                $mission->time_ago = $time_ago;

                $mission->end_time_unix = Carbon::parse($mission->end_date)->timestamp;

                $mission->formatted_start_date = $start_date;
                $mission->formatted_end_date = $end_date;
            }

            return view('platform.partials.mission_card', compact('missions'))->render();
        }

        if ($request->has('category_id') && $request->category_id != 'all') {
            $query->where('category_id', $request->category_id);
        }

        $missions = $query->paginate(10);
        $categories = MissionCategory::all();

        return view('platform.mission_c', compact('missions', 'categories'));
    }

    public function profil($id) {
    $user = User::with('missionary')->findOrFail($id);
    $missionary = $user->missionary;

    $dob = $missionary ? $missionary->dob : null;

    $day = '';
    $month = '';
    $year = '';

    if (!empty($dob) && strpos($dob, '-') !== false) {
        $pecahan = explode('-', $dob);
        if (count($pecahan) === 3) {
            $year = (int)  $pecahan[0];
            $month = (int)  $pecahan[1];
            $day = (int)  $pecahan[2];
        }
    }

    return view('platform.profil', compact('user', 'missionary', 'year', 'month', 'day'));
    }
    
    public function updateProfile(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:225',
            'phone' => 'required|string|max:16',
            'day' => 'required|integer|min:1|max:31',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:1900|max:2100',
            'gender' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = User::findOrFail($id);
        $missionary = Missionary::where('user_id', $id)->firstOrFail();

        //update user
        $user->name = $request->input('name');
        $user->phone = preg_replace("/[^0-9]/", "", $request->input('phone'));
        $user->save();

        //update missionary

        $missionary->gender = $request->input('gender');
        $missionary->dob = Carbon::createFromDate($request->input('year'), $request->input('month'), $request->input('day') );

        if($request->hasFile('image')){
            if ($missionary->image) {
                Storage::disk('public')->delete($missionary->image);
            }
            $imagePath = $request->file('image')->store('images/missionaries', 'public');
            $missionary->image = $imagePath;
        }

        $missionary->save();

        return redirect()->route('platform.profil', $id)->with('success', 'Profile updated successfully.');

    }
}