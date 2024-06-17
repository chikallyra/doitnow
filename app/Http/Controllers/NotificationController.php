<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\UserMission;
use App\Models\UserReward;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function showNotifications()
    {
        $notifications = Notification::where('notifiable_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('platform.notif', ['notifications' => $notifications]);
    }

    public function notifyNewMission(Request $request, $missionId)
    {
        $mission = Mission::findOrFail($missionId);
        $userId = $request->user()->id;

        Notification::create([
            'type' => 'App\Notifications\NewMissionNotification',
            'notifiable_id' => $userId,
            'notifiable_type' => 'App\Models\User',
            'data' => json_encode([
                'title' => 'New Mission',
                'message' => 'A new mission has been uploaded by the company.',
            ]),
            'expires_at' => Carbon::now()->addDays(3),
        ]);

        return response()->json(['message' => 'Notification sent successfully.']);
    }

    public function notifyMissionError(Request $request, $userMissionId)
    {
        $userMission = UserMission::findOrFail($userMissionId);
        $userId = $request->user()->id;

        Notification::create([
            'type' => 'App\Notifications\MissionErrorNotification',
            'notifiable_id' => $userId,
            'notifiable_type' => 'App\Models\User',
            'data' => json_encode([
                'title' => 'Mission Error',
                'message' => 'There was an error completing the mission.',
            ]),
            'expires_at' => Carbon::now()->addDays(3),
        ]);

        return response()->json(['message' => 'Notification sent successfully.']);
    }

    public function notifyRewardReceived(Request $request, $userRewardId)
    {
        $userReward = UserReward::findOrFail($userRewardId);
        $userId = $request->user()->id;

        Notification::create([
            'type' => 'App\Notifications\RewardNotification',
            'notifiable_id' => $userId,
            'notifiable_type' => 'App\Models\User',
            'data' => json_encode([
                'title' => 'Reward Received',
                'message' => 'You have received a reward for completing the mission.',
            ]),
            'expires_at' => Carbon::now()->addDays(3),
        ]);

        return response()->json(['message' => 'Notification sent successfully.']);
    }
}
