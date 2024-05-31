<?php

namespace App\Http\Controllers;

use App\Models\MissionCategory;
use App\Http\Requests\StoreMissionCategoryRequest;
use App\Http\Requests\UpdateMissionCategoryRequest;

class MissionCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreMissionCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMissionCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissionCategory  $missionCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MissionCategory $missionCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissionCategory  $missionCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionCategory $missionCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMissionCategoryRequest  $request
     * @param  \App\Models\MissionCategory  $missionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissionCategoryRequest $request, MissionCategory $missionCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionCategory  $missionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionCategory $missionCategory)
    {
        //
    }
}
