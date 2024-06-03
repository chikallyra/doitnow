-<?php

namespace App\Http\Controllers;

use App\Models\Missionary;
use App\Http\Requests\StoreMissionaryRequest;
use App\Http\Requests\UpdateMissionaryRequest;

class MissionaryController extends Controller
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
     * @param  \App\Http\Requests\StoreMissionaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMissionaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Missionary  $missionary
     * @return \Illuminate\Http\Response
     */
    public function show(Missionary $missionary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Missionary  $missionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Missionary $missionary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMissionaryRequest  $request
     * @param  \App\Models\Missionary  $missionary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissionaryRequest $request, Missionary $missionary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Missionary  $missionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Missionary $missionary)
    {
        //
    }
}
