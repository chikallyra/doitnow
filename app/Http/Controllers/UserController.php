<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function banUser(User $user){
        $user->is_banned = true;
        $user->save();

        return redirect()->back()->with('success', 'User has been banned.');
    }

    public function unbanUser(User $user){
        $user->is_banned = false;
        $user->save();

        return redirect()->back()->with('success', 'User has been unbanned.');
    }

    public function edit(User $user) {
        return view('admin.dasboard.edituser', compact('user'));
    }
    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

    $user->update($validatedData);
    return redirect('/admin/dashboard')->with('success', 'Data has been updated');
    }
}