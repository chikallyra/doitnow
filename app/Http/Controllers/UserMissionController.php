<?php

namespace App\Http\Controllers;

use App\Models\UserMission;
use App\Http\Requests\StoreUserMissionRequest;
use App\Http\Requests\UpdateUserMissionRequest;

class UserMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserMissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserMissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMission  $userMission
     * @return \Illuminate\Http\Response
     */
    public function show(UserMission $userMission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMission  $userMission
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMission $userMission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserMissionRequest  $request
     * @param  \App\Models\UserMission  $userMission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserMissionRequest $request, UserMission $userMission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMission  $userMission
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMission $userMission)
    {
        //
    }
}
