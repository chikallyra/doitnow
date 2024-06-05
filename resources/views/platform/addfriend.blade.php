@extends('platform.layouts.main_p')

@section('container')
<section class="bg-whit h-[800px]">
    {{-- navbar --}}
    <div class="bg-red-600 ">
        <div class="flex justify-between lg:mx-24 mx-10 pt-5 lg:pt-10  ">
            <a href="/platform"><i class="fas fa-arrow-left text-white font-semibold text-xl"></i></a>
        </div>
        <div class="flex flex-col justify-center items-center mt-10 lg:mt-16">
            <h1 class="text-white font-medium text-xl lg:text-3xl">Refer your friends</h1>
            <h2 class="text-white font-bold text-2xl lg:text-4xl">Earn 25.000!</h2>
        </div>

        <div class="grid grid-cols-5 gap-1 lg:grid-cols-5 lg:gap-8 mx-5 mt-10 pb-10 sm:justify-center sm:flex   lg:justify-center lg:flex ">
            <div class="lg:flex lg:flex-col lg:justify-center">
                <img src="/img/af.png" class="lg:w-16 lg:ml-7" alt="">
                <p class="pt-2 text-white lg:text-center lg:text-xl">Refer a friend</p>
            </div>
            <div class="flex justify-center items-start lg:mt-5 mt-2">
                <p><i class="fas fa-arrow-right text-white text-lg lg:text-2xl"></i></p>
            </div>
            <div class="lg:flex lg:flex-col lg:justify-center">
                <img src="/img/rupiah.png" class="lg:w-16 lg:ml-7" alt="">
                <p class="pt-2 text-white lg:text-center lg:text-xl">You get 15.000!</p>
            </div>
            <div class="flex justify-center items-start lg:mt-5 mt-2">
                <p><i class="fas fa-plus text-white text-lg lg:text-2xl"></i></p>
            </div>
            <div class="lg:flex lg:flex-col lg:justify-center">
                <img src="/img/rp.png" class="lg:w-16 lg:ml-7" alt="">
                <p class="pt-2 text-white lg:text-center lg:text-xl">They get 5.000</p>
            </div>
          </div>        
    </div>
    {{-- end navbar --}}

    {{-- content --}}
    <div class="mx-10 mt-6">
        <h1 class="text-black text-xl font-semibold mb-2">Referral Code</h1>
        <div class="flex items-center w-full bg-white  border-dashed border-2 border-red-500 rounded-lg px-4 py-2">
            <span class="text-lg font-mono text-gray-500 flex-grow">ABCD-1234-EFGH</span>
            <button onclick="copyReferralCode()" class=" text-red-600 font-semibold py-1 px-4 rounded-lg ml-4">
                <i class="far fa-copy text-xl"></i>
            </button>
        </div>
        <p id="copy-message" class="text-green-500 mt-2 hidden">Referral code copied!</p>
    </div>
    {{-- end content --}}

    {{-- ket --}}
    <div class="flex items-center max-w-md mx-10 my-8 pb-52">
        <!-- Circle with "Rp" -->
        <div class="flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 bg-red-600 text-white text-2xl sm:text-4xl font-bold rounded-full">
            Rp
        </div>
        <!-- Text content next to the circle -->
        <div class="ml-4">
            <div class="text-sm text-slate-800">3 people accepted your referral invite</div>
            <div class="text-xl font-bold text-slate-800">45.000 points</div>
        </div>
    </div>
    
    {{-- end ket --}}
</section>
    
@endsection