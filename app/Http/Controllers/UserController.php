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
}
