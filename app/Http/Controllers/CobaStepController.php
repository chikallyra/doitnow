<?php

namespace App\Http\Controllers;

use App\Models\CobaStep;
use App\Http\Requests\StoreCobaStepRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCobaStepRequest;
use Illuminate\Support\Facades\Log;

class CobaStepController extends Controller
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
     * @param  \App\Http\Requests\StoreCobaStepRequest  $request
     * @return \Illuminate\Http\Response
     */
   

     public function store(Request $request)
     {
         $request->validate([
             'steps' => 'required|array',
             'steps.*.type' => 'required|string|in:text,file,hidden', // Validasi untuk jenis langkah-langkah
             'steps.*.description' => 'required|string', // Validasi untuk deskripsi langkah-langkah
         ]);
     
         // Proses langkah-langkah
         $steps = $request->input('steps');
         $missionSteps = [];
         foreach ($steps as $step) {
             $missionSteps[] = [
                 'description' => $step['description'],
                 'type' => $step['type'],
                 // 'label' => $step['label'], // Uncomment this line if label is needed
             ];
         }
     
         // Store the mission with its steps
         CobaStep::create([
             'steps' => json_encode($missionSteps),
         ]);
     
         return back()->with('success', 'Mission steps have been successfully saved.');
     }
     

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CobaStep  $cobaStep
     * @return \Illuminate\Http\Response
     */
    public function show(CobaStep $cobaStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CobaStep  $cobaStep
     * @return \Illuminate\Http\Response
     */
    public function edit(CobaStep $cobaStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCobaStepRequest  $request
     * @param  \App\Models\CobaStep  $cobaStep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCobaStepRequest $request, CobaStep $cobaStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CobaStep  $cobaStep
     * @return \Illuminate\Http\Response
     */
    public function destroy(CobaStep $cobaStep)
    {
        //
    }
}
