@extends('company.dashboardcompany.layouts.main')

@section('container')
<section class=" py-64 ">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-[120px_1fr] lg:gap-8 mx-8">
        @if(auth()->user()->role == 0 || auth()->user()->role == 1)
        <a href="{{ route('create.mission') }}">
             <div class="h-32 rounded-lg bg-white border-4 border-gray-300 hover:bg-gray-200">
                 <div class="flex justify-center items-center">
                     <img src="/img/add.png" class="mt-4 rounded-full border-2 border-gray-300 p-1" alt="">
                 </div>
                 <h1 class="text-center mt-2 text-black">Create Mission</h1>
             </div>
        </a>
        @endif
        <div class="h-full rounded-lg bg-white border-4 border-gray-300">
            <div class="flex justify-between mx-5 mt-5">
                 <h1 class="text-black text-3xl uppercase font-medium">your mission</h1>                
                    <form class="flex items-center max-w-sm mr-10">   
                     <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                         <input type="text" id="simple-search" class="bg-gray-50 border border-red-500 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-96 ps-10  p-2.5 " placeholder="Find a mission" required />
                        </div>
                        <button type="submit" class="p-2.5 ms-1 text-sm font-medium text-black ">
                            <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 4v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2m6-16v2m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v10m6-16v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2"/>
                            </svg>                          
                            <span class="sr-only">Search</span>
                        </button>
                    </form> 
            </div>

            <div>
                <div class="grid grid-cols-3 gap-4 lg:grid-cols-3 lg:gap-8 p-8">
                    @foreach ($missions as $mission)
                    <div class="h-32 rounded-lg bg-white border-2 boerder-gray-300 shadow-lg shadow-gray-500">
                       
                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                            <div class="border-4 border-red-700 w-4/5 lg:w-24 h-4/5 rounded-3xl mt-2 ml-2  ">
                                <img src="{{ asset('storage/' . $mission->image) }}" class="w-4/5 lg:w-24 h-full  rounded-3xl " alt="">
                            </div>
                            <div class="h-32 lg:col-span-2">
                                <h1 class="text-white uppercase bg-red-600 font-medium w-20 rounded-md text-center mt-2 text-sm">{{ $mission->category->name }}</h1>
                                <h2 class="text-black font-semibold text-xl truncate pt-1">{{ $mission->title }}</h2>
                                <p class="text-sm text-gray-400">{{ $mission->max_missionaries }} participant</p>
                                <div class="flex justify-between">
                                    <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10   ">
                                        <h1 class="text-base text-center text-white font-bold">Rp</h1>
                                    </div>
                                    <div class="flex justify-center items-center  -ml-4">
                                        <h1 class="text-2xl text-red-600 font-medium">{{ $mission->reward->reward }}</h1>    
                                    </div>
                                    <h2 class="mr-2 mt-2 text-white bg-red-500 rounded-md px-1 flex justify-center items-center uppercase text-[12px] text-center py-1 font-medium">{{ $mission->start_date }} - {{ $mission->end_date }}</h2>
                                </div>
                            </div>
                        </div>
                          
                    </div>
                    @endforeach                   
                  </div>
            </div>
        </div>
        </div>
</section>
    

@endsection