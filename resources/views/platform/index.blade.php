@extends('layouts.mainplatform')

@section('container')

<section class="bg-white h-[1500px]">
    <div class="bg-red-600 h-44">
        <div class="containe pt-10 flex">
            <div class="border-4 border-white rounded-full w-12 h-12  flex justify-center items-center mx-10 ">
                <h1 class="text-2xl text-white font-bold">Rp</h1>
            </div>
            <div class="flex justify-center items-center ml-[-30px]">
                <h1 class="text-4xl text-white font-extrabold">9.000</h1>
                <div class="flex justify-end items-end ml-28">
                    <a href=""><i class="far fa-bell text-3xl text-white hover:text-gray-700"></i></a>
                </div>     
            </div>
        </div>

    </div>

    <div class="mt-5 bg-white lg:mx-20 mx-8 " >
        <div class="shadow-xl shadow-slate-200 rounded-lg py-3 px-5">
            <div class="flex justify-between mb-2 text-gray-700">
                <h1>Level 2</h1>
                <h2>600 EXP</h2>
            </div>   
            <div class="w-full bg-gray-200 rounded-full h-2.5 ">
                <div class="bg-red-700 h-2.5 rounded-full" style="width: 70%"></div>
            </div>
        </div>
        
  

    </div>

    <div class="mt-5 lg:mx-20 mx-8 py-7 px-3 shadow-lg border-2 shadow-slate-200 rounded-xl">
        
        <div class="flex items-center gap-4">
            <img class="w-12 h-12 rounded-full border-2 border-gray-300 " src="/img/profile.png" alt="">
            <div class="ml-4">
                <div class="text-black font-bold text-xl">John Doe<span class="border-2 text-base font-normal ml-3 bg-gray-100 rounded-lg px-2 ">Expert</span></div>     
            </div>
        </div>

    </div>

    <div class="grid grid-cols-3 gap-4 lg:grid-cols-3 lg:gap-8 lg:mx-20 mx-8 mt-8">
        <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300 ">
            <div class="h-32 rounded-lg shadow-lg shadow-gray-200 border-2 ">
                <div class="flex justify-center items-center">
                    <img src="/img/home.png" class="pt-6 w-14 h-[70px] lg:w-16 lg:h-20" alt="">
                </div>
                <div class="flex justify-center items-center">
                    <h1 class="text-gray-600 text-sm lg:text-lg text-center mt-2 font-semibold">Mission Center</h1>
                </div>
            </div>
        </a>
        <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300 ">
            <div class="h-32 rounded-lg shadow-lg shadow-gray-200 border-2 ">
                <div class="flex justify-center items-center">
                    <img src="/img/ceklis.png" class="pt-6 w-14 h-[70px] lg:w-16 lg:h-20" alt="">
                </div>
                <div class="flex justify-center items-center">
                    <h1 class="text-gray-600 text-sm lg:text-lg text-center mt-2 font-semibold">Check In</h1>
                </div>
            </div>
        </a>
        <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300 ">
            <div class="h-32 rounded-lg shadow-lg shadow-gray-200 border-2 ">
                <div class="flex justify-center items-center">
                    <img src="/img/addfriend.png" class="pt-6 w-14 h-[70px] lg:w-16 lg:h-20" alt="">
                </div>
                <div class="flex justify-center items-center">
                    <h1 class="text-gray-600 text-sm lg:text-lg text-center mt-2 font-semibold">Invite a Friend</h1>
                </div>
            </div>
        </a>
        
    </div>

    
    <div class="mx-8  mt-8 mb-12 lg:mx-20">
        <div class="flex justify-between">
            <h1 class=" font-bold text-black lg:text-3xl text-xl mb-8">Mission</h1>
            <a href=";p"><i class="fas fa-arrow-right text-xl text-black"></i></a href=";p">
        </div>
        
        <a href="" class="">
            <div class="h-40 rounded-lg my-3 border-2 shadow-lg mb-8 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start lg:mx-10 mt-5 ">
                    <img src="/img/misi.png" class="w-32 lg:-ml-2" alt="">
                    <div class="truncate ml-2 lg:ml-8 ">
                        <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16">SOCIAL</h1>
                        <h2 class="  text-black font-semibold text-lg">Follow @Mulai on Instagram</h2>
                        <p class="text-sm">by Mulai Pte Ltd</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2  ">
                            <h1 class="text-base text-center text-white font-bold">Rp</h1>
                        </div>
                        <div class="flex justify-center items-center mt-[-35px] -ml-4">
                            <h1 class="text-2xl text-red-600 font-medium">88.000</h1>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="">
            <div class="h-40 rounded-lg my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start lg:mx-10 mt-5 ">
                    <img src="/img/misi.png" class="w-32 lg:-ml-2" alt="">
                    <div class="truncate ml-2 lg:ml-8 ">
                        <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16">SOCIAL</h1>
                        <h2 class="  text-black font-semibold text-lg">Follow @Mulai on Instagram</h2>
                        <p class="text-sm">by Mulai Pte Ltd</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2  ">
                            <h1 class="text-base text-center text-white font-bold">Rp</h1>
                        </div>
                        <div class="flex justify-center items-center mt-[-35px] -ml-4">
                            <h1 class="text-2xl text-red-600 font-medium">88.000</h1>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="">
            <div class="h-40 rounded-lg my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
            <div class="flex items-start lg:mx-10 mt-5 ">
                    <img src="/img/misi.png" class="w-32 lg:-ml-2" alt="">
                    <div class="truncate ml-2 lg:ml-8 ">
                        <h1 class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-16">SOCIAL</h1>
                        <h2 class="  text-black font-semibold text-lg">Follow @Mulai on Instagram</h2>
                        <p class="text-sm">by Mulai Pte Ltd</p>
                        <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2  ">
                            <h1 class="text-base text-center text-white font-bold">Rp</h1>
                        </div>
                        <div class="flex justify-center items-center mt-[-35px] -ml-4">
                            <h1 class="text-2xl text-red-600 font-medium">88.000</h1>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </a>       
    </div>
</section>
    
@endsection