<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mission;
use App\Models\UserMission;
use Illuminate\Support\Facades\Auth;

class MissionSteps extends Component
{
    public $mission;
    public $currentStep = 0;
    public $stepsCompleted = [];

    public function mount($missionId)
    {
        $this->mission = Mission::find($missionId);

        if (is_string($this->mission->steps)) {
            $this->mission->steps = json_decode($this->mission->steps, true);
        }
    }

    public function render()
    {
        return view('livewire.mission-steps');
    }

    public function completeStep($stepIndex, $stepValue)
    {
        $this->stepsCompleted[$stepIndex] = $stepValue;

        $userMission = UserMission::updateOrCreate(
            [
                'missionary_id' => Auth::user()->id,
                'mission_id' => $this->mission->id
            ],
            [
                'steps_completed' => json_encode($this->stepsCompleted)
            ]
        );

        if ($stepIndex < count($this->mission->steps) - 1) {
            $this->currentStep++;
        } else {
            $userMission->update(['mission_complete_at' => now()]);
            session()->flash('message', 'Mission completed successfully!');
        }
    }
}

