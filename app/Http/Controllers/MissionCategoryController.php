<?php

namespace App\Http\Controllers;

use App\Models\MissionCategory;
use App\Http\Requests\StoreMissionCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMissionCategoryRequest;
use App\Models\BlogCategory;

class MissionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $missions =  MissionCategory::all();
        $blogs = BlogCategory::all();
        return view('admin.dasboard.categories.categories', compact('missions', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dasboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMissionCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required'
        ]);

        MissionCategory::create($validatedData);

        return redirect('admin/dashboard/categories')->with('success', 'Category added!');
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
        return view('admin.dasboard.categories.edit', compact('missionCategory'));
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
        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required'
        ]);
        
        $missionCategory->name = $request['name'];
        $missionCategory->desc = $request['desc'];
        $missionCategory->save();

        return redirect('admin/dashboard/categories')->with('success', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionCategory  $missionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionCategory $missionCategory)
    {
        $missionCategory->delete();

        return redirect('admin/dashboard/categories')->with('success', 'Data has been deleted');
    }
}
