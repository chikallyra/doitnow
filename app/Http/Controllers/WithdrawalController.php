<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use App\Models\UserReward;
use App\Models\Missionary;
use App\Notifications\WithdrawalNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

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

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'amount' => 'required|integer|min:5000',
    //         'payment_method' => 'required|string',
    //         'phone_number' => 'required|string|max:15',
    //     ]);

    //     // Mendapatkan user yang sedang login
    //     $missionary = auth()->user()->missionary->id; 
    //     $userReward = UserReward::where('missionary_id', $missionary)->first();

    //     if (!$userReward) {
    //         return redirect()->back()->withErrors(['error' => 'User reward not found']);
    //     }

    //     // Membuat data withdrawal
    //     $withdrawal = Withdrawal::create([
    //         'missionary_id' => $missionary,
    //         'user_reward_id' => $userReward->id,
    //         'amount' => $validatedData['amount'],
    //         'payment_method' => $validatedData['payment_method'],
    //         'phone_number' => $validatedData['phone_number'],
    //         'status' => 'pending',
    //     ]);

    //     return redirect('/platform/withdraw')
    //         ->with('success', 'Withdrawal request has been submitted successfully!');
    // }
}

