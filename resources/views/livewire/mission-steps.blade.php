<div>
    <div class="mx-10 lg:mx-32 mt-10 pb-10">
        <h1 class="mb-3 font-bold text-3xl text-black">Steps</h1>
        <div class="border p-3 rounded-lg">
            @foreach($mission->steps as $index => $step)
                @if($index == $currentStep)
                    <div class="step-container m-4 flex items-center">
                        <label class="ml-2 text-black font-normal">{{ $step['description'] }}</label>
                        <div>
                            @if($step['type'] === 'file')
                                <input type="file" wire:model="stepsCompleted.{{ $index }}">
                            @elseif($step['type'] === 'hidden')
                                <p>{{ $step['description'] }}</p>
                            @else
                                <input type="text" wire:model="stepsCompleted.{{ $index }}">
                            @endif
                            <button type="button" wire:click="completeStep({{ $index }}, $event.target.value)">Submit</button>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
