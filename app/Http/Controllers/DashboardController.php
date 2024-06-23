<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Missionary;
use App\Models\Notification;
use App\Models\Reward;
use App\Models\User;
use App\Models\UserMission;
use App\Models\UserReward;
use App\Notifications\MissionRejectedNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::where('type', 0)->with('missionary')->get();
        
        foreach($users as $user){
            $user->missionary = Missionary::where('user_id', $user->id)->first();
            
            if ($user->missionary) {
                $user->completed_mission = UserMission::where('missionary_id', $user->missionary->id)
                    ->whereNotNull('mission_complete_at')
                    ->count();
    
                $rewards = UserReward::where('missionary_id', $user->missionary->id)
                    ->whereNotNull('reward_id')
                    ->pluck('reward_id');
    
                $user->reward_earned = Reward::whereIn('id', $rewards)
                    ->get()
                    ->reduce(function ($carry, $item) {
                        $reward = preg_replace('/[^\d]/', '', $item->reward);
                        return $carry + intval($reward);
                    }, 0);
            } else {
                $user->completed_mission = 0;
                $user->reward_earned = 0;
            }
        }
    
        return view('admin.dasboard.index', compact('users'));
    }
        
    public function blog() {
        $blogs = Blog::with('blogCategory')->get();
        return view('admin.dasboard.blog.blog', compact('blogs'));
    }

    public function userMission($id) {
    $missionary = Missionary::where('user_id', $id)->first();

    if (!$missionary) {
        return redirect()->back()->with('error', 'Missionary not found');
    }

    $missions = UserMission::with('mission', 'missionary.user')
        ->where('missionary_id', $missionary->id)
        ->get();

        return view('admin.dasboard.mission.index', compact('missions'));
    }

    public function listMission() {
        $missions = UserMission::with('mission', 'missionary.user')->get();
        return view('admin.dasboard.mission.index', compact('missions'));
    }

    public function showMission($id) {
        $userMission = UserMission::with('mission', 'missionary.user')->findOrFail($id);
        return view('admin.dasboard.mission.show', compact('userMission'));
    }

    public function validateMission($id) {
        $userMission = UserMission::findOrFail($id);
        $userMission->mission_complete_at = now();
        $userMission->save();
    
        $reward = $userMission->mission->reward;
        $userReward = null;
        if ($reward) {
            $userReward = UserReward::create([
                'missionary_id' => $userMission->missionary_id,
                'reward_id' => $reward->id,
                'reward_status' => 'unclaimed'
            ]);
    
            // Kirim notifikasi reward
            Notification::create([
                'type' => 'App\Notifications\RewardNotification',
                'notifiable_id' => $userMission->missionary->user->id,
                'notifiable_type' => 'App\Models\User',
                'data' => json_encode([
                    'title' => 'Reward Received',
                    'message' => 'You have received a reward for completing the mission.',
                    'reward' => $reward->reward, // Pastikan menyimpan nilai reward
                ]),
                'expires_at' => Carbon::now()->addDays(3),
                'mission_id' => $userMission->mission_id,
                'user_mission_id' => $userMission->id,
                'user_reward_id' => $userReward->id,
            ]);
        }
    
        return redirect()->route('admin.missions.show', $id)->with('success', 'Mission validated and reward assigned successfully.');
    }    
        public function rejectMission(Request $request, UserMission $userMission)
        {
            try {
                Log::info('Reject mission request received', ['request' => $request->all(), 'userMission' => $userMission]);

                $validatedData = $request->validate([
                    'rejection_reason' => 'required|string'
                ]);

                Log::info('Validation passed', ['validatedData' => $validatedData]);

                $userMission->rejection_reason = $validatedData['rejection_reason'];
                $userMission->rejected_at = now();
                $userMission->save();

                Log::info('User mission updated', ['userMission' => $userMission]);

                // Send notification to missionary
                $user = $userMission->missionary->user;
                $user->notify(new MissionRejectedNotification($validatedData['rejection_reason'], $userMission->mission->title));

                Log::info('Notification sent', ['user' => $user]);

                return redirect()->route('admin.missions.show', $userMission->id)->with('success', 'Mission rejected successfully.');
            } catch (\Exception $e) {
                Log::error('Error rejecting mission: ' . $e->getMessage(), ['exception' => $e]);
                return redirect()->back()->with('error', 'Internal Server Error');
            }
        }
}
