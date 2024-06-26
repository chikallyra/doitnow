@extends('layouts.mainlogin')

@section('container')
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 pt-20 bg-white h-screen">
  <div class=" items-center flex  justify-center lg:h-full bg-red-600 h-32" >
    <img src="/img/loginbanner.png" class="w-[200px] lg:w-[400px] lg:mt-14 md:mt-10 h-70" alt="">
  </div>
  <div class="">
    <div class="flex flex-wrap items-center justify-center lg:mr-20 lg:mt-[50px]">
      <!-- alert registration success -->
      @if (session()->has('success'))
          <div class="p-4 mb-4 mt-2 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      <!-- alert login failed -->
      @if (session()->has('loginError'))
          <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-300" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

        <div class="max-w-md px-8 py-6 bg-white bg-opacity-30 border-2 border-gray-200 rounded-lg shadow-xl shadow-slate-300 sm:p-6 md:p-8 w-full  mt-[-90px] lg:mt-6 lg:ml-20 lg:w-full  mx-4">
            <form class="space-y-5" action="{{ route('login') }}" method="POST">
                @csrf
                <h5 class="text-4xl font-bold text-center pb-3 text-gray-900">Password</h5>
                <div >
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter at least 8 characters" required />
                    @error('password')
                          <div class="text-red-500">
                              {{ $message }}
                          </div>
                    @enderror
                  </div>
                <!-- Button Login -->
                <button type="submit"
                    class="w-full text-white bg-[#DD2120] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-base px-5 py-2.5 text-center">Login</button>
                </form>
                {{-- <p class="text-center font-bold text-lg text-gray-400">Or</p>

                <!-- Button Login with Google -->
                <button type="submit"
                    class="flex items-start justify-center w-full text-primary bg-gray-100 font-bold text-[24px] hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5">
                    <img src="img/google.png" class="w-5 h-5" alt="">
                    <a href=""> Login with Google</a>
                </button> --}}

                
        </div>

    </div>
  </form>
  </div>
</div>
@endsection