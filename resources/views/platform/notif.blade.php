@extends('platform.layouts.main_p')
@section('container')
    {{-- navbar --}}
    <div class="flex justify-start lg:mx-24 mx-10 pt-5">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <h1 class="text-black text-2xl font-bold text-center ml-10">Notifications</h1>
    </div>
    <div class="border-b-2 border mt-2 border-gray-300"></div>
    {{-- end navbar --}}

    {{-- content --}}
    <div class="mt-10 bg-white h-screen">
        @foreach($notifications as $notification)
            @php
                $data = is_array($notification->data) ? $notification->data : json_decode($notification->data, true);
            @endphp
            @if($notification->type == 'App\Notifications\NewMissionNotification')
                <div class="bg-white rounded-2xl mx-2 hover:bg-gray-100 lg:mx-20 mb-3 p-4 border border-red-600">
                    <div class="flex flex-row items-center">
                        <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                            <img src="/img/notif.png" alt="">
                        </div>
                        <div class="ml-4">
                            <h2 class="text-black font-bold">{{ $data['title'] }}</h2>
                            <p class="text-gray-500">{{ $data['message'] }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @if($notification->type == 'App\Notifications\MissionErrorNotification')
                <div class="bg-white rounded-2xl mx-2 lg:mx-20 mb-3 p-4 border border-red-600 hover:bg-gray-100">
                    <div class="flex flex-row items-center">
                        <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                            <h1 class="text-base text-white font-bold"><i class="fas fa-times"></i></h1>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-black font-bold">{{ $data['title'] }}</h2>
                            <p class="text-gray-500">{{ $data['message'] }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @if($notification->type == 'App\Notifications\RewardNotification')
                <div class="bg-red-600 rounded-2xl mx-2 lg:mx-20 mb-3 p-4 hover:bg-red-700">
                    <div class="flex flex-row items-center">
                        <div class="border-4 border-white bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                            <h1 class="text-base text-white font-bold">Rp</h1>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-white font-bold">{{ $data['title'] }}</h2>
                            <p class="text-white">{{ $data['message'] }}</p>
                        </div>
                        <div class="ml-auto text-white font-bold">
                            + {{ $data['reward'] }}
                        </div>
                    </div>
                </div>
            @endif

            @if($notification->type == 'App\Notifications\MissionRejectedNotification')
            <div class="bg-white rounded-2xl mx-2 lg:mx-20 mb-3 p-4 border border-red-600 hover:bg-gray-100">
                <div class="flex flex-row items-center">
                    <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                        <h1 class="text-base text-white font-bold"><i class="fas fa-times"></i></h1>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-black font-bold">{{ $data['title'] }}</h2>
                        <p class="text-gray-500">{{ $data['message'] }}</p>
                    </div>
                </div>
            </div>
        @endif

        @endforeach
    </div>
    {{-- end content --}}
@endsection
