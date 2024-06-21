@foreach($notifications as $notification)
    @if($notification->type == 'App\Notifications\NewMissionNotification')
        <div class="bg-white rounded-2xl mx-2 hover:bg-gray-100 lg:mx-20 mb-3 p-4 border border-red-600">
            <div class="flex flex-row items-center">
                <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                    <img src="/img/notif.png" alt="">
                </div>
                <div class="ml-4">
                    <h2 class="text-black font-bold">{{ $notification->data['title'] }}</h2>
                    <p class="text-gray-500">{{ $notification->data['message'] }}</p>
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
                    <h2 class="text-black font-bold">{{ $notification->data['title'] }}</h2>
                    <p class="text-gray-500">{{ $notification->data['message'] }}</p>
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
                    <h2 class="text-white font-bold">{{ $notification->data['title'] }}</h2>
                    <p class="text-white">{{ $notification->data['message'] }}</p>
                </div>
                <div class="ml-auto text-white font-bold">
                   + {{ $notification->data['reward'] }}
                </div>
            </div>
        </div>
    @endif
@endforeach
