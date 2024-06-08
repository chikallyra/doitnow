@extends('platform.layouts.main_p')
@section('container')
    {{-- navbar --}}
    <div class="flex justify-between lg:mx-24 mx-10 pt-5  ">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <h1 class="text-black text-2xl font-bold  ">History</h1>
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
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Completed</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">On Going</a>
                        </li>
                        
                        </ul>
                    </div>
            </li>             
        </ul>
    </div>
    <div class="border-b-2 border mt-2 border-gray-300"></div>
    {{-- end navbar --}}

    {{-- content --}}
    {{-- 1 --}}
    <div class="mx-10 lg:mx-32 mt-10 ">
        <a href="{{ route('platform.misi') }}" class="">
            <div class="h-40 rounded-2xl my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start mx-3 lg:mx-10 mt-5 ">
                <div class=" border-4 border-red-700 w-4/5 h-4/5 rounded-3xl mt-2">
                    <img src="/img/misi.png" class="w-24 lg:-ml-2 mx-auto" alt="">
                </div> 
                    <div class="truncate ml-2 lg:ml-8 ">
                        <div class="flex justify-between items-end">
                            <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16 uppercase">Media</h1>
                        <h3 class=" mt-2 text-red-500 border rounded-md px-1 uppercase lg:text-[12px] text-[10px] text-center py-1 font-medium lg:ml-[860px]">On Going</span> </h3> 
                        </div>
                        <h2 class="  text-black font-semibold text-lg truncate">Follow @Mulai on Instagram</h2>
                        <p class="text-sm">100 participant</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2  ">
                            <h1 class="text-base text-center text-white font-bold">Rp</h1>
                        </div>
                        <div class="flex justify-start items-center mt-[-35px] ml-12">
                            <h1 class="text-2xl text-red-600 font-medium">88.000</h1>    
                        </div>                      
                    </div>
                </div>
            </div>
        </a>          
    </div>
    {{-- 2 --}}
    <div class="mx-10 lg:mx-32  pb-10">
        <a href="{{ route('platform.misi') }}" class="">
            <div class="h-40 rounded-2xl my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start mx-3 lg:mx-10 mt-5 ">
                <div class=" border-4 border-red-700 w-4/5 h-4/5 rounded-3xl mt-2">
                    <img src="/img/misi.png" class="w-24 lg:-ml-2 mx-auto" alt="">
                </div> 
                    <div class="truncate ml-2 lg:ml-8 ">
                        <div class="flex justify-between items-end">
                            <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16 uppercase">SOCIAL</h1>
                        <h3 class=" mt-2 text-green-500 border rounded-md px-1 uppercase lg:text-[12px] text-[10px] text-center py-1 font-medium lg:ml-[860px]">Completed</span> </h3> 
                        </div>
                        <h2 class="  text-black font-semibold text-lg truncate">Follow @Mulai on Instagram</h2>
                        <p class="text-sm">100 participant</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2  ">
                            <h1 class="text-base text-center text-white font-bold">Rp</h1>
                        </div>
                        <div class="flex justify-start items-center mt-[-35px] ml-12">
                            <h1 class="text-2xl text-red-600 font-medium">88.000</h1>    
                        </div>                      
                    </div>
                </div>
            </div>
        </a>
             
    </div>
    {{-- end content --}}

@endsection