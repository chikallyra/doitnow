<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index() {
        return view('platform.index');
    }
    public function misi() {
        return view('platform.misi');
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
    public function profil() {
        return view('platform.profil');
    }
}