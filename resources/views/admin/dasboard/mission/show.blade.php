@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<section class="bg-white h-full">
    <div class="mt-10 ml-10">
        <a href="{{ route('admin.missions') }}" class="text-gray-800 text-xl font-semibold hover:text-black">
            <span><i class="fas fa-backspace"></i></span> Back
        </a>
    </div>
    <div class="container mx-auto p-4 mt-28">
        <div class="max-w-3xl mx-auto bg-red-200 rounded-xl border shadow-lg p-6">
            <!-- Header Section -->
            <h1 class="text-3xl font-bold mb-8 text-center text-red-900">Mission Details</h1>
    
            <!-- Mission Info -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 pb-2 border-white mb-5">
                    Missionary : {{ $userMission->missionary->user->name }}
                </h2>
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 pb-2 border-white mb-5">
                    Mission <span class="ml-8">:</span> {{ $userMission->mission->title }}
                </h2>
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 pb-2 border-white mb-5">
                    Status <span class="ml-11">:</span>
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

            <div class="flex">
                <!-- Validation Button or Message -->
                @if(!$userMission->mission_complete_at)
                <form action="{{ route('admin.missions.validate', $userMission->id) }}" method="POST" class="">
                    @csrf
                    <button type="submit" class="px-4 py-2 mr-3 bg-red-600 text-white rounded-lg hover:bg-red-800 transition duration-200">
                        Validate Mission
                    </button>
                </form>
                @else
                <p class="text-green-500 text-center font-medium mt-5">
                    This mission has been validated and the reward has been assigned.
                </p>
                @endif

                @if(!$userMission->mission_complete_at)
                <!-- Modal toggle -->
                <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-black hover:text-white bg-transparent border-red-600 border hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                    Reject Mission
                </button>
                @endif

                <!-- Main modal -->
                <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    Rejection Notes
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="static-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                @if (session()->has('success'))
                                <div class="p-4 mb-4 mt-2 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <form action="{{ route('admin.missions.reject', $userMission->id) }}" method="POST" class="max-w-sm mx-auto">
                                    @csrf
                                    <input type="hidden" name="mission_id" value="{{ $userMission->mission_id }}">
                                    <label for="message" class="block mb-2 text-lg font-medium text-gray-900">Rejection Reason</label>
                                    <textarea id="message" name="rejection_reason" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Enter rejection reason..."></textarea>
                                    <div class="flex justify-center items-center">
                                        <button type="submit" class="text-white bg-red-600 hover:bg-red-800 mt-5 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                                    </div>
                                </form>                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</section>
@endsection
