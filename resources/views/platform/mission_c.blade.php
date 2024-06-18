@extends('platform.layouts.main_p')
@section('container')
    {{-- navbar --}}
    <section class="w-full bg-white fixed z-30 ">
        <div class="flex justify-between items-center lg:mx-24 mx-10 pt-5 py-5">
            <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
            <h1 class="text-black text-2xl font-bold  ">Mission Center</h1>
            <ul class="flex">
                <li>
                    
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class=" " type="button">
                        <i class="fas fa-sliders-h mx-3 text-black font-bold text-3xl"></i>
                    </button>
                        
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">All</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Sosial</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Media</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Game</a>
                            </li>
                            
                            </ul>
                        </div>
                </li>             
            </ul>
        </div>
        <div class="border-b-2 border mt-2 border-gray-300"></div>
        {{-- end navbar --}}
    </section>
    

    {{-- content --}}
    {{-- 1 --}}
       
    <div class="mx-10 lg:mx-32 pt-32 bg-white h-full pb-10 ">
        @foreach ($missions as $mission)
        <a href="{{ route('platform.misi', $mission->id) }}" class="">
            <div class="h-40 rounded-2xl my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start mx-3 lg:mx-10 mt-5 ">
                <div class=" border-4 border-red-700 w-4/5 lg:w-24 h-4/5 rounded-3xl mt-2 ">
                    <img src="{{ asset('storage/' . $mission->image) }}" class="w-24 lg:w-24 h-24 mx-auto rounded-3xl" alt="misi foto">
                </div> 
                    <div class="truncate ml-2 lg:ml-8 ">
                        <div class="flex justify-between items-end">
                            <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16 uppercase">sosial</h1>
                            <h3 class="mt-2 text-white bg-gray-500 rounded-md px-2 uppercase w-full lg:text-[12px] text-[10px] text-center py-1 font-medium lg:ml-[750px] " data-end-time="{{ $mission->end_time_unix }}">
                                {{ $mission->formatted_start_date }} - {{ $mission->formatted_end_date }} | 
                                <span class="time-remaining"  data-time-ago="{{ $mission->time_ago }}">
                                    {{ $mission->time_ago }}
                                </span>
                            </h3>
                        </div>
                        <h2 class="  text-black font-semibold text-lg truncate">{{ $mission->title }}</h2>
                        <p class="text-sm">{{ $mission->max_missionaries }} participant</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2  ">
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
    
    {{-- end content --}}

@endsection