{{-- resources/views/platform/partials/mission_card.blade.php --}}
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
                        <li class=" text-[10px] text-white bg-gray-500 rounded-md px-2 uppercase max-w-md lg:text-[12px] text-left py-1 font-medium" data-end-time="{{ $mission->end_time_unix }}">
                            {{ $mission->formatted_start_date }} - {{ $mission->formatted_end_date }} | 
                            <span class="time-remaining" data-time-ago="{{ $mission->time_ago }}">
                                {{ $mission->time_ago }}
                            </span>
                        </li>
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
