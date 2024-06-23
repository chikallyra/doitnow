@extends('platform.layouts.main')
@section('container')
<section class="lg:pt-52 pt-32">
    {{-- rewads --}}
    <a href="{{ route('platform.withdraw') }}" class="">
        <div class="flex items-center mx-5 lg:mx-32">
            <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-12 h-12 lg:w-16 lg:h-16  ">
                <h1 class="text-center text-xl lg:text-3xl text-white font-bold p-3">Rp</h1>
            </div>
            <h1 class=" text-3xl lg:text-5xl  text-slate-800 font-medium ml-3 ">{{  number_format($totalReward, 0, ',', '.') }} <span><i class="fas fa-angle-right"></i></span></h1>    
        </div>
    </a>
    {{-- end rewads --}}

    {{-- card --}}
    <div class="flex justify-start items-center">
        <div class="grid grid-cols-2 gap-2 lg:grid-cols-2 lg:gap-8 mt-10 lg:mx-32 mx-5  ">
            <a href="{{ route ('platform.mission_c') }}" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                <div class="h-24 w-20 lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                    <div class="flex justify-center items-center">
                        <img src="/img/home.png " class="w-10 lg:w-14 mt-2" alt="home center">
                    </div>
                    <h1 class="text-center text-black font-medium lg:text-lg text-sm px-2">Mission Center</h1>
                </div>
            </a>
            <a href="{{ route('platform.addfriend') }}" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                <div class="h-24 w-20  lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                    <div class="flex justify-center items-center">
                        <img src="/img/addfriend.png " class="w-10 lg:w-14 mt-2" alt="home center">
                    </div>
                    <h1 class="text-center text-black font-medium lg:text-lg text-sm px-2">Invite a Friend</h1>
                </div>
            </a>
        </div>
    </div>
    {{-- end card --}}

    {{-- live searching --}}
    <div class=" mx-5 lg:mx-32 mt-10">
        <form class="flex items-center max-w-sm mr-10">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="search" name="keyword" class="w-full bg-gray-50 border border-red-500 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block lg:w-96 ps-10 p-2.5" placeholder="Find a mission" />
            </div>
            <a href="{{ route('platform.history') }}" class="p-2.5 text-sm font-medium text-black hover:bg-gray-200 rounded-lg">
                <h1 class="flex justify-center items-center text-lg"><i class="fas fa-history pr-1 pt-0.5 text-lg"></i>History</h1>
            </a>
        </form>
    </div>

    <div id="search-results">

    {{-- Mission --}}
    <div class="mx-5 lg:mx-32 mt-10 pb-10 ">
        <div class="flex justify-between">
            <h1 class="font-bold text-black lg:text-3xl text-xl mb-8">Mission</h1>
        </div>
        @foreach ($missions as $mission)
        <a href="{{ route('platform.misi', $mission->id) }}" class="">
            <div id="container" class="h-40 rounded-lg my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
                <div class="flex items-start mx-3 lg:mx-10 mt-5">
                    <div class="border-4 border-red-700 w-2/5 lg:w-24 h-2/5 rounded-3xl mt-2">
                        <img src="{{ asset('storage/' . $mission->image) }}" class="w-24 h-24 lg:w-24 lg:h-24 mx-auto rounded-3xl" alt="misi foto">
                    </div>
                    <div class="truncate ml-2 lg:ml-8">
                        <div class="flex justify-between gap-2 ">
                            <ul class="flex justify-between gap-2 items-center">
                                <li class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-full uppercase">{{ $mission->category->name }}</li>
                                <li class=" text-[10px] text-white bg-gray-500 rounded-md px-2 uppercase max-w-md lg:text-[12px] text-left py-1 font-medium  " data-end-time="{{ $mission->end_time_unix }}"> {{ $mission->formatted_start_date }} - {{ $mission->formatted_end_date }} | 
                                    <span class="time-remaining "  data-time-ago="{{ $mission->time_ago }}">
                                    {{ $mission->time_ago }}
                                </span></li>
                            </ul>
                        </div>
                        <h2 class="text-black font-semibold text-lg truncate">{{ $mission->title }}</h2>
                        <p class="text-sm">{{ $mission->max_missionaries }} participant only</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2">
                            <h1 class="text-base text-center text-white font-bold">Rp</h1>
                        </div>
                        <div class="flex justify-start items-center mt-[-35px] ml-12">
                            <h1 class="text-2xl text-red-600 font-medium">{{ $mission->reward->reward }}</h1>    
                        </div>                      
                    </div>
                </div>
            </div>
        </a>
        
        @endforeach  
    </div>
</div>
    {{-- End Mission --}}
</section>
@endsection


@section('scripts')
<script>
function startCountdown() {
    const missionElements = document.querySelectorAll('.time-remaining');
    missionElements.forEach(element => {
        const endTimeUnix = parseInt(element.parentElement.getAttribute('data-end-time'));
        const timeAgo = element.getAttribute('data-time-ago');

        if (isNaN(endTimeUnix)) {
            element.textContent = "Time is up";
            return;
        }

        const interval = setInterval(() => {
            const now = Math.floor(Date.now() / 1000);
            const remainingTime = endTimeUnix - now;

            if (remainingTime <= 0) {
                element.textContent = "Time is up";
                clearInterval(interval);
            } else {
                const hours = Math.floor(remainingTime / 3600);
                const minutes = Math.floor((remainingTime % 3600) / 60);
                const seconds = remainingTime % 60;
                element.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            }
        }, 1000);
    });
}


</script>
@endsection
