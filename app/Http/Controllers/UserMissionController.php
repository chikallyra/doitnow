<?php

namespace App\Http\Controllers;

use App\Models\UserMission;
use App\Http\Requests\StoreUserMissionRequest;
use App\Http\Requests\UpdateUserMissionRequest;
use App\Models\Missionary;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class UserMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





     public function takeMission(Request $request)
    {
        try {
            Log::info('Received take mission request', ['request' => $request->all()]);

            $validatedData = $request->validate([
                'mission_id' => 'required|exists:missions,id',
                'user_id' => 'required|exists:users,id'
            ]);

            Log::info('Validation passed', ['validatedData' => $validatedData]);

            $missionary = Missionary::where('user_id', $validatedData['user_id'])->first();

            if (!$missionary) {
                Log::warning('Missionary not found', ['user_id' => $validatedData['user_id']]);
                return response()->json(['success' => false, 'message' => 'Missionary not found'], 404);
            }

            Log::info('Missionary found', ['missionary' => $missionary]);

            $userMission = UserMission::firstOrCreate(
                [
                    'missionary_id' => $missionary->id,
                    'mission_id' => $validatedData['mission_id'],
                ],
                [
                    'joined_at' => now(),
                    'mission_complete_at' => null,
                    'steps_completed' => json_encode([]),
                ]
            );

            Log::info('User mission created', ['userMission' => $userMission]);

            return response()->json(['success' => true, 'userMission' => $userMission]);
        } catch (\Exception $e) {
            Log::error('Error taking mission: ' . $e->getMessage(), ['exception' => $e]);
            return response()->json(['success' => false, 'message' => 'Internal Server Error'], 500);
        }
    }

    public function completeStep(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'mission_id' => 'required|exists:missions,id',
                'step_index' => 'required|integer',
                'step_value' => 'nullable|string'
            ]);

            $missionary = Missionary::where('user_id', auth()->id())->first();

            if (!$missionary) {
                return response()->json(['success' => false, 'message' => 'Missionary not found'], 404);
            }

            $userMission = UserMission::where('missionary_id', $missionary->id)
                ->where('mission_id', $validatedData['mission_id'])
                ->first();

            if (!$userMission) {
                return response()->json(['success' => false, 'message' => 'User mission not found'], 404);
            }

            $stepsCompleted = json_decode($userMission->steps_completed, true) ?? [];
            
            $stepValue = $validatedData['step_value'] ?? null;

            if ($request->hasFile('file')) {
                $filePath = $request->file('file')->store('uploads', 'public');
                $stepValue = $filePath;
            }

            $stepsCompleted[$validatedData['step_index']] = [
                'step_index' => $validatedData['step_index'],
                'step_value' => $stepValue
            ];

            $userMission->steps_completed = json_encode($stepsCompleted, JSON_UNESCAPED_SLASHES);
            $userMission->save();

            return response()->json(['success' => true, 'stepsCompleted' => $stepsCompleted]);
        } catch (\Exception $e) {
            Log::error('Error completing step: ' . $e->getMessage(), ['exception' => $e]);
            return response()->json(['success' => false, 'message' => 'Internal Server Error'], 500);
        }
    }

    // Remove mission_complete_at setting
    public function completeMission(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'mission_id' => 'required|exists:missions,id'
            ]);

            $missionary = Missionary::where('user_id', auth()->id())->first();

            if (!$missionary) {
                return response()->json(['success' => false, 'message' => 'Missionary not found'], 404);
            }

            $userMission = UserMission::where('missionary_id', $missionary->id)
                ->where('mission_id', $validatedData['mission_id'])
                ->first();

            if (!$userMission) {
                return response()->json(['success' => false, 'message' => 'User mission not found'], 404);
            }

            // Don't set mission_complete_at here
            $userMission->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error completing mission: ' . $e->getMessage(), ['exception' => $e]);
            return response()->json(['success' => false, 'message' => 'Internal Server Error'], 500);
        }
    }
}
