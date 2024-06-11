@extends('company.dashboardcompany.layouts.main')
 @section('container')
 
 <div class="py-52 h-full mx-10">
    <h1 class="font-bold text-5xl text-red-600 mb-9">Show Detail</h1>
    <div class="flex justify-between items-center mb-3">
        <a href="{{ route ('company') }}" class="bg-red-400 px-5 py-1 rounded-xl text-base hover:bg-red-500 text-white font-medium">Back</a>
        <div class="flex justify-end">
            <a href="{{ route('edit.mission', $mission->id) }}" class="bg-yellow-600 px-5 py-1 rounded-xl text-base hover:bg-yellow-800 text-white font-medium mr-2  ">Edit</a>
            <form action="{{ route('delete.mission', $mission) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                @csrf
                @method('DELETE')
            <button type="submit" class="bg-red-700 px-5 py-1 rounded-xl text-base hover:bg-red-800 text-white font-medium ">Delete</button>
            </form>
        </div>     
    </div>
    <div class="border-2 border-gray-500 rounded-xl">
        <div class="flex justify-center items-center py-8">
            <img src="{{ asset('storage/' . $mission->image) }}" class=" w-72 h-72" alt="mission">       
        </div>
        
        <div class="flex justify-center  ">
            <div class=" overflow-hidden max-w-full mx-96">
                <!-- Content -->
                <div class="p-4 text-black  ">
                    <!-- Entry 1 -->
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Mission Name <span class="ml-8">:</span> </div>
                        <div class=" text-lg ml-[-10px]"> {{ $mission->title }}</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Category <span class="ml-[76px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px]"> {{ $mission->category->name }}</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Mission Activate <span class="ml-[14px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px]"> {{ $mission->start_date }} - {{ $mission->end_date }} </div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Mission Targets <span class="ml-5">:</span> </div>
                       <div class=" text-lg  ml-[-10px]"> {{ $mission->max_missionaries }} <span>participant</span></div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Link <span class="ml-[117px]">:</span> </div>
                       <div class=" text-lg underline  ml-[-10px]">{{ $mission->link }}</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Rewards <span class="ml-[80px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px] "> <span>Rp.</span> {{ $mission->reward->reward }}</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Description <span class="ml-[15px]">:</span> </div>
                       <div class=" text-lg  ml-[-19px] "> {!! $mission->description !!}</div>
                    </div>
                    <div class="grid grid-cols-2 py-2">
                        <div class="text-gray-900 text-lg font-bold">Steps <span class="ml-[105px]">:</span> </div>
                        <div class="text-lg">
                            <ul class="list-disc">
                                @foreach (explode('</p>', $mission->steps) as $index => $step)
                                    <li class="{{ $index != 0 ? 'ml-[-10px]' : '' }}">{!! $step !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
 </div>
     
 @endsection