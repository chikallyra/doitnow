<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Missionary;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatformController extends Controller
{
    public function index() {
        $missions = Mission::with('reward', 'category')->get();
        
        foreach($missions as $mission){
            $mission->start_date = \Carbon\Carbon::parse($mission->start_date)->format('d M');
            $mission->end_date = \Carbon\Carbon::parse($mission->end_date)->format('d M');
        }

        return view('platform.index', compact('missions'));
    }

    public function misi($id) {
        $mission = Mission::with('company', 'reward', 'category')->findOrFail($id);
        return view('platform.misi', compact('mission'));
    }

    public function addfriend() {
        return view('platform.addfriend');
    }
    public function history() {
        return view('platform.history');
    }
    public function notif() {
        return view('platform.notif');
    }
    public function mission_c() {
        return view('platform.mission_c');
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
            $year = $pecahan[0];
            $month = $pecahan[1];
            $day = $pecahan[2];
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