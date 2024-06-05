@extends('platform.layouts.main_p')
<section >
    {{-- navbar --}}
    <div class="flex justify-between lg:mx-24 mx-10 pt-5 ">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <ul class="flex">
            <li>
                <i class="fas fa-code-branch mx-3 text-black font-bold text-3xl"></i>
            </li>
            <li>
                <svg class="w-8 h-8 text-black font-semibold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z"/>
                  </svg>                  
            </li>      
        </ul>
    </div>
    <div class="border-b-3 border mt-2 border-gray-200"></div>
    {{-- end navbar --}}

    {{-- gambar --}}
    <div class="flex justify-center items-center pt-24">
        <img src="/img/misi.png" class="w-64 " alt="">
    </div>
    {{--end  gambar --}}

    {{-- ket --}}
    <div class="mx-10 lg:mx-32 border p-3 rounded-lg mt-10 pb-10">
        <h1 class=" uppercase bg-red-600 font-semibold py-1 px-3 rounded-lg text-center tracking-wider max-w-fit text-white">social</h1>
        <h5 class="mt-3 text-3xl text-black font-bold ">Follow @doitnow on Instagram</h5>
        <p class="mt-2 font-semibold text-gray-500">by doitnow</p>
        <p class="text-lg text-slate-800 font-medium mt-2">Follow @doitnow on Instagram and stay updated with inspirational content, tips, and exciting opportunities. Join our community of motivated individuals and be part of the journey towards financial growth.</p>
        <div class="flex justify-between mt-3">
            <input type="text" id="myInput" value="https://www.instagram.com/p/C7nkpE6JPV1/?igsh=MTRhMjlwaHgwN3pwaQ==" class="w-full bg-gray-200 px-2 text-lg py-1 rounded-xl border-2 mr-5 border-gray-400">
            <button onclick="copyText()"><i class="far fa-copy text-3xl text-gray-700"></i></button>
        </div>
    </div>
    {{-- end ket --}}

    {{-- steps --}}
    <div class="mx-10 lg:mx-32  mt-10 pb-10">
        <h1 class="mb-3 font-bold text-3xl text-black">Steps</h1>
        <div class="border p-3 rounded-lg" > 
                  {{-- 1 --}}
                <div class="flex flex-row items-start">
                    <input  id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-red-600 bg-white  border-red-300 border-2 rounded-xl focus:ring-red-500 ">
                    <label for="checkbox-1" class="ms-2 text-lg font-medium text-gray-900 "><a href="" class="text-red-600 hover:underline hover:decoration-red-600">Click here </a> and start this mission</label>
                </div>
                  {{-- 2 --}}
                <div class="flex flex-row items-start py-2">
                    <input  id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-red-600 bg-white  border-red-300 border-2 rounded-xl focus:ring-red-500 ">
                    <label for="checkbox-2" class="ms-2 text-lg font-medium text-gray-900 ">Find the official "@DoitNow" account on Instagram and click on “Follow”.</label>
                </div>
                  {{-- 3 --}}
                <div class="flex flex-row items-start pb-2">
                    <input  id="checkbox-3" type="checkbox" value="" class="w-4 h-4 text-red-600 bg-white  border-red-300 border-2 rounded-xl focus:ring-red-500 ">
                    <label for="checkbox-3" class="ms-2 text-lg font-medium text-gray-900 ">Comment on the latest post “Followed”</label>
                </div>
                  {{-- 4 --}}
                <div class="flex flex-row items-start">
                    <input  id="checkbox-4" type="checkbox" value="" class="w-4 h-4 text-red-600 bg-white  border-red-300 border-2 rounded-xl focus:ring-red-500 ">
                    <label for="checkbox-4" class="ms-2 text-lg font-medium text-gray-900 ">Upload proof of follow</label>
                </div>
        </div>

    </div>
    {{-- end  steps --}}

</section>