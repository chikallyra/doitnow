<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('welcome', compact('user'));
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user = User::all();
        return view('admin.home', compact('user'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function companyHome()
    {
        $user = User::all();
        return view('welcome', compact('user'));
    }

    public function homePage() {
        $blog = Blog::orderBy('id', 'desc')->paginate(3);
        return view('home', compact('blog'));
    }
}
