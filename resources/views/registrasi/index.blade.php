@extends('layouts.mainlogin')

@section('container')
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 bg-white">
  <div class=" items-center flex  justify-center bg-red-600 h-20 lg:h-[700px]" >
    <img src="/img/loginbanner.png" class="w-[120px] lg:w-[400px] lg:mt-14" h-70 alt="">
  </div>
  <div class=" relative justify-center items-center mx-8 lg:mt-24">
    <h1 class="mt-6 text-[35px] text-center font-bold text-gray-900 sm:text-3xl  lg:text-4xl">
      Create your account company
    </h1>
    
    <p class="mt-1 text-center leading-relaxed text-gray-500">
        Get started  - deliver your best work with us
    </p>
    <h2 class="text-center mt-5 text-lg lg:text-[25px] font-bold text-gray-800">Sign Up </h2>
      <div class="mb-4 ">
        <div class="max-w-md relative justify-center items-center mx-auto">
          <form class="max-w-sm mx-auto mt-6 "  action="{{ route('register.company') }}" method="POST">
            @csrf
            <div class="mb-5">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
              <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full name Company's" name="name" value="{{ old('name') }}" required />
              @error('name')
                <div class="text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
              <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full email Company's" name="email" value="{{ old('email') }}" required />
              @error('email')
                <div class="text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-5">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
              <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter at least 8 characters"  name="password" required />
              @error('password')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
              @enderror
            </div>
            <div class="mb-5">
              <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone Number</label>
              <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full phone phone Company's" name="phone" value="{{ old('phone') }}" required />
              @error('phone')
                <div class="text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <!-- Button Sign up -->
            <button type="submit"class="w-full text-white bg-red-600 mb-3 font-bold text-[34px] hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-black rounded-lg text-sm px-5 py-2.5 text-center">Sign Up</button>
            <p class=" text-sm font-medium text-center text-gray-900" >Already have an account ? <a href="/login" class="text-red-700 hover:underline font-bold">Log in</a></p>
  
          </form>
        </div>
      </div>
  </div>
</div>
@endsection