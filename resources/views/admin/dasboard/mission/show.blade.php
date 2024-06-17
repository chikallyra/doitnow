@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Mission Details</h1>

    <div class="mb-4">
        <h2 class="text-xl font-semibold">Missionary: {{ $userMission->missionary->user->name }}</h2>
        <h2 class="text-xl font-semibold">Mission: {{ $userMission->mission->title }}</h2>
        <h2 class="text-xl font-semibold">Status: {{ $userMission->mission_complete_at ? 'Completed' : 'Pending' }}</h2>
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold">Steps Completed:</h3>
        <ul>
            @foreach(json_decode($userMission->steps_completed, true) as $step)
            <li class="mb-2">
                <strong>Step {{ $step['step_index'] + 1 }}:</strong>
                @if(Str::startsWith($step['step_value'], 'uploads/') || Str::startsWith($step['step_value'], 'storage/'))
                    <div>
                        <a href="{{ asset('storage/' . $step['step_value']) }}" target="_blank">
                            <img src="{{ asset('storage/' . $step['step_value']) }}" alt="Step Image" class="max-w-xs mt-2">
                        </a>
                    </div>
                @else
                    {{ $step['step_value'] }}
                @endif
            </li>
            @endforeach
        </ul>
    </div>

    @if(!$userMission->mission_complete_at)
    <form action="{{ route('admin.missions.validate', $userMission->id) }}" method="POST">
        @csrf
        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Validate Mission</button>
    </form>
    @else
    <p class="text-green-500">This mission has been validated and the reward has been assigned.</p>
    @endif
</div>
@endsection
