@extends('platform.layouts.main')
 @section('container')
 <section class="pt-52">
    {{-- rewads --}}
    <a href="" class="">
        <div class="flex items-center mx-5 lg:mx-32">
            <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-12 h-12 lg:w-16 lg:h-16  ">
                <h1 class="text-center text-xl lg:text-4xl text-white font-bold">Rp</h1>
            </div>
            <h1 class=" text-3xl lg:text-5xl  text-slate-800 font-medium ml-3 ">88.000 ></h1>    
        </div>
    </a>
    {{-- end rewads --}}

    {{-- card --}}
    <div class="flex justify-center items-center">
        <div class="grid grid-cols-4 gap-2 lg:grid-cols-4 lg:gap-8 mt-10 lg:mx-10 mx-5  ">
            <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                <div class="h-24 w-20 lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                    <div class="flex justify-center items-center">
                        <img src="/img/home.png " class="w-10 lg:w-14 mt-2" alt="home center">
                    </div>
                    <h1 class="text-center text-black font-medium lg:text-lg text-sm px-2">Mission Center</h1>
                </div>
            </a>
            <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                <div class="h-24 w-20  lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                    <div class="flex justify-center items-center">
                        <img src="/img/ceklis.png " class="w-10 lg:w-14 mt-2" alt="home center">
                    </div>
                    <h1 class="text-center text-black font-medium lg:text-lg text-sm px-2 mt-3 lg:mt-3">Check-in</h1>
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
            <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                <div class="h-24 w-20  lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                    <div class="flex justify-center items-center">
                        <img src="/img/mp.png " class="w-10 lg:w-14 mt-2" alt="home center">
                    </div>
                    <h1 class="text-center text-black font-medium lg:text-lg text-sm px-2 lg:mt-3">Market Place</h1>
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
                       <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                       </svg>
                   </div>
                <input type="text" id="simple-search" class="w-full bg-gray-50 border border-red-500 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block lg:w-96 ps-10  p-2.5 " placeholder="Find a mission" required />
               </div>
               <button type="submit" class="p-2.5 ms-3 text-sm font-medium text-black ">
                   <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                       <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 4v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2m6-16v2m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v10m6-16v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2"/>
                   </svg>                          
                   <span class="sr-only">Search</span>
               </button>
               <a href="" class="p-2.5  text-sm font-medium text-black ">
                        <h1 class=" flex justify-center items-center text-lg"><i class="fas fa-history pr-1 pt-0.5 text-lg"></i>History</h1>
               </a >
        </form> 

    </div>
    {{-- end live searching --}}

    {{-- mission --}}
    <div class="mx-10 lg:mx-32 mt-10 pb-10">
        <div class="flex justify-between">
            <h1 class=" font-bold text-black lg:text-3xl text-xl mb-8">Mission</h1>
        </div>
        <a href="{{ route('platform.misi') }}" class="">
            <div class="h-40 rounded-lg my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start mx-3 lg:mx-10 mt-5 ">
                    <img src="/img/misi.png" class="w-32 lg:-ml-2" alt="">
                    <div class="truncate ml-2 lg:ml-8 ">
                        <div class="flex justify-between items-end">
                            <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16">SOCIAL</h1>
                        <h3 class=" mt-2 text-white bg-gray-500 rounded-md px-2 uppercase lg:text-[12px] text-[10px] text-center py-1 font-medium lg:ml-[860px]">12 juni - 23 juni</h3> 
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
    {{-- end mission --}}
    
</section>
 @endsection