@extends('platform.layouts.main_p')
@section('container')
    {{-- navbar --}}
    <div class="flex justify-start lg:mx-24 mx-10 pt-5  ">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <h1 class="text-black text-2xl font-bold text-center ml-10   ">Notifications</h1>
    </div>
    <div class="border-b-2 border mt-2 border-gray-300"></div>
    {{-- end navbar --}}

    {{-- content --}}
    <div class="mt-10 bg-white h-screen">
        {{-- 1 --}}
        <a href="" class=" " >
            <div class="bg-red-600 rounded-2xl mx-2 lg:mx-20 mb-3 p-4 hover:bg-red-700">
                <div class="flex flex-row items-center">
                    <!-- Circular Icon -->
                    <div class="border-4 border-white bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                        <h1 class="text-base text-white font-bold">Rp</h1>
                    </div>
                    
                    <!-- Texts Next to the Icon -->
                    <div class="ml-4">
                        <h2 class="text-white font-bold">Reword Reservice</h2>
                        <p class="text-white">Follow <a href="https://www.instagram.com/mulai" class="lg:hover:underline underline">@mulai</a> on Instagram</p>
                    </div>
                    
                    <!-- Additional Text on the Right -->
                    <div class="ml-auto text-white font-bold">
                        +5.000
                    </div>
                </div>
            </div>
        </a> 
        {{-- 2 --}}
        <a href="">
            <div class="bg-white rounded-2xl mx-2 lg:mx-20 mb-3 p-4 border border-red-600 hover:bg-gray-100">
                <div class="flex flex-row items-center">
                    <!-- Circular Icon -->
                    <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                        <h1 class="text-base text-white font-bold"><i class="fas fa-times"></i></h1>
                    </div>
                    
                    <!-- Texts Next to the Icon -->
                    <div class="ml-4">
                        <h2 class="text-black font-bold">Rejected File</h2>
                        <p class="text-gray-500">Follow <a href="https://www.instagram.com/mulai" class="lg:hover:underline underline">@mulai</a> on Instagram</p>
                    </div>
                    
                    <!-- Additional Text on the Right -->
                    <div class="ml-auto text-white font-bold">
                        +5.000
                    </div>
                </div>
            </div>
        </a>    
        {{-- 3 --}}
        <a href="">
            <div class="bg-white rounded-2xl mx-2 hover:bg-gray-100 lg:mx-20 mb-3 p-4 border border-red-600">
                <div class="flex flex-row items-center">
                    <!-- Circular Icon -->
                    <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                        <img src="/img/notif.png" alt="">
                    </div>
                    
                    <!-- Texts Next to the Icon -->
                    <div class="ml-4">
                        <h2 class="text-black font-bold">New Mission</h2>
                        <p class="text-gray-500">123456789</p>
                    </div>
                    
                    <!-- Additional Text on the Right -->
                    <div class="ml-auto text-white font-bold">
                        +5.000
                    </div>
                </div>
            </div>
               
        </a>        
    </div>
    
    {{-- end content --}}
@endsection