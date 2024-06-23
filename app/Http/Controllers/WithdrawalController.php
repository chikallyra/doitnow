<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use App\Models\UserReward;
use App\Models\Missionary;
use App\Notifications\WithdrawalNotification;
use App\Notifications\WithdrawalValidatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Spatie\FlareClient\View;

use function Ramsey\Uuid\v1;

class WithdrawalController extends Controller
{
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = auth()->user();
        $missionary = $user->missionary;

        // Mendapatkan user_reward berdasarkan missionary
        $userReward = UserReward::where('missionary_id', $missionary->id)->first();

        // Pass data ke view
        return view('platform.withdraw', compact('missionary', 'userReward'));
    }

    public function withdraw () {
        $withdrawal = Withdrawal::with('missionary', 'userreward')->get();
        return view('admin.dasboard.withdraw.withdraw', compact('withdrawal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|min:5000',
            'payment_method' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $user = auth()->user();
        $missionary = Missionary::where('user_id', $user->id)->first();
        if (!$missionary) {
            return redirect()->back()->withErrors(['msg' => 'Missionary not found.']);
        }

        $userReward = UserReward::where('missionary_id', $missionary->id)->first();
        if (!$userReward) {
            return redirect()->back()->withErrors(['msg' => 'User reward not found.']);
        }

        $withdrawal = new Withdrawal();
        $withdrawal->missionary_id = $missionary->id;
        $withdrawal->user_reward_id = $userReward->id;
        $withdrawal->amount = $request->input('amount');
        $withdrawal->payment_method = $request->input('payment_method');
        $withdrawal->phone_number = $request->input('phone_number');
        $withdrawal->status = 'pending';
        $withdrawal->save();

        return redirect()->back()->with('success', 'Withdrawal request has been submitted successfully!');
    }

    public function validateWithdrawal(Request $request, $id) {
        $withdrawal =  Withdrawal::findOrFail($id);
        $userReward = UserReward::findOrFail($withdrawal->user_reward_id);

        if ($withdrawal->status !== 'pending') {
            return redirect()->back()->withErrors(['msg' => 'Withdrwal has been validated']);
        }

        $withdrawal->status = 'completed';
        $withdrawal->save();

        $userReward->reward_status = 'claimed';
        $userReward->claimed_at = now();
        $userReward->save();

        $missionary = $withdrawal->missionary;
        $missionary->user->notify(new WithdrawalValidatedNotification($withdrawal, $withdrawal->amount));

        return redirect()->back()->with('success', 'Withdrawal has been approved and user reward updated.');

    }
}

