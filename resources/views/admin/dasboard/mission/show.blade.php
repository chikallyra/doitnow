@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<section class="bg-white h-full">
    <div class=" mt-10 ml-10">
        <a href="{{ route('admin.missions') }}" class="text-gray-800 text-xl font-semibold hover:text-black"> <span><i class="fas fa-backspace"></i></span> Back</a>
    </div>
    <div class="container mx-auto p-4 mt-28 ">
        <div class="max-w-3xl mx-auto bg-red-200 rounded-xl border shadow-lg  p-6">
            <!-- Header Section -->
            <h1 class="text-3xl font-bold mb-8 text-center text-red-900">Mission Details</h1>
    
            <!-- Mission Info -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 pb-2 border-white mb-5">Missionary : {{ $userMission->missionary->user->name }}</h2>
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 pb-2 border-white mb-5">Mission <span class="ml-8">:</span> {{ $userMission->mission->title }}</h2>
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 pb-2 border-white mb-5">Status <span class="ml-11">:</span> 
                    <span class="{{ $userMission->mission_complete_at ? 'text-green-500' : 'text-red-500' }}">
                        {{ $userMission->mission_complete_at ? 'Completed' : 'Pending' }}
                    </span>
                </h2>
            </div>
    
            <!-- Steps Completed -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Steps Completed:</h3>
                <ul class="space-y-4">
                    @foreach(json_decode($userMission->steps_completed, true) as $step)
                    <li class="p-4 bg-gray-50 rounded-md shadow-sm">
                        <div class="flex items-start space-x-4">
                            <strong class="text-gray-900">Step {{ $step['step_index'] + 1 }}:</strong>
                            <div class="flex-1">
                                @if(Str::startsWith($step['step_value'], 'uploads/') || Str::startsWith($step['step_value'], 'storage/'))
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $step['step_value']) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $step['step_value']) }}" alt="Step Image" class="max-w-xs rounded-lg">
                                        </a>
                                    </div>
                                @else
                                    <p class="text-gray-600">{{ $step['step_value'] }}</p>
                                @endif
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
    
            <!-- Validation Button or Message -->
            @if(!$userMission->mission_complete_at)
            <form action="{{ route('admin.missions.validate', $userMission->id) }}" method="POST" class="">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-800 transition duration-200">
                    Validate Mission
                </button>
            </form>
            @else
            <p class="text-green-500 text-center font-medium mt-5">This mission has been validated and the reward has been assigned.</p>
            @endif
        </div>
    </div>
</section>

@endsection
