@extends('layouts.mainlogin')

@section('container')
<section class="h-full">
  <div class="container">
      <div class="w-full lg:grid lg:grid-cols-2 lg:gap-2">
          <div class="flex flex-col items-center h-20 justify-center bg-red-600 lg:h-[695px]">
              <img src="/img/loginbanner.png" class="w-[120px] lg:w-[400px] lg:mt-14" h-70 alt="">
          </div>
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

              <main class="flex items-center justify-center px-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:w-full lg:mt-[-50px]">
                    <h2 class="text-center mt-10 text-[25px] font-medium">Log in to Button as...</h2>
    
                    <div class="flex justify-center items-center mt-4">
                      <div role="tablist" class="tabs tabs-bordered ">
                        {{-- company --}}
                        <input type="radio" name="my_tabs_1" role="tab" class="tab mx-10 text-xl font-medium hover:text-red-600" aria-label="Company" checked />
                        <div role="tabpanel" class="tab-content pt-5">
                            <div class="max-w-md">
                              <form class="max-w-sm mx-auto" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-5">
                                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                  <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full email company's" name="email" required />
                                  @error('email')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <div class="mb-5">
                                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                  <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter at least 8 characters" name="password" required />
                                  @error('password')
                                        <div class="text-red-500">
                                            {{ $message }}
                                        </div>
                                  @enderror
                                </div>
                                <!-- Button Login -->
                                <button type="submit"class="w-full text-white bg-black font-bold text-[24px] hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-black rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                                <!-- Button back -->
                                <div class="flex justify-center items-center">
                                    <a href="/" class="mt-5 text-white bg-[#FF0000] px-36 font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm py-2.5 text-center">Back</a> 
                                </div>
                                <p class="text-center text-lg py-3 font-medium text-gray-600">Or</p>
    
                                <!-- Button Login with Google -->
                                <a href="{{ route('redirect') }}" class="flex items-center justify-center w-full text-primary bg-gray-100 font-bold text-[24px] hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5">
                                    <img src="img/google.png" class="w-5 h-5 mr-2" alt="">
                                    Login with Google
                                </a>
    
                                <div class="text-center mt-3 text-lg">
                                    <p class="text-gray-500">Don’t have an account yet? <a href="/registrasi" class="text-blue-500 hover:text-blue-700">Sign in</a></p>
                                </div>  
                              </form>
                            </div>
                        </div>
                        
                        {{-- missionary --}}
                        <input type="radio" name="my_tabs_1" role="tab" class="tab text-xl font-medium hover:text-red-600" aria-label="Missionary" />
                        <div role="tabpanel" class="tab-content pt-5">
                          <div class="max-w-md">
                            <form class="max-w-sm mx-auto" action="{{ route('login') }}" method="POST">
                              @csrf
                              <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full email" name="email" required />
                                @error('email')
                                  <div class="text-red-500">
                                      {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="mb-5">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter at least 8 characters" name="password" required />
                                @error('password')
                                      <div class="text-red-500">
                                          {{ $message }}
                                      </div>
                                @enderror
                              </div>
                              <!-- Button Login -->
                              <button type="submit"class="w-full text-white bg-black font-bold text-[24px] hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-black rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                              <!-- Button back -->
                              <div class="flex justify-center items-center">
                                  <a href="/" class="mt-5 text-white bg-[#FF0000] px-36 font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm py-2.5 text-center">Back</a> 
                              </div>
                              <p class="text-center text-lg py-3 font-medium text-gray-600">Or</p>
    
                              <!-- Button Login with Google -->
                              <a href="{{ route('redirect') }}" class="flex items-center justify-center w-full text-primary bg-gray-100 font-bold text-[24px] hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5">
                                  <img src="img/google.png" class="w-5 h-5 mr-2" alt="">
                                  Login with Google
                              </a>
    
                              <div class="text-center mt-3 text-lg">
                                  <p class="text-gray-500">Don’t have an account yet? <a href="/registrasi" class="text-blue-500 hover:text-blue-700">Sign in</a></p>
                              </div>  
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </main>
          </div>
      </div>
  </div>
</section>
@endsection
     
<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section class="relative flex h-32 items-center bg-red-600 lg:col-span-5 lg:h-full xl:col-span-6">
            <img src="/img/loginbanner.png" class="flex justify-center items-center lg:px-56 px-32 " alt="doitnow">

      </section>
  
     
      <main
      class="flex items-center justify-center px-8  sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
    >
      <div class="max-w-xl lg:w-full lg:mt-[-50px]">

        <h2 class="text-center mt-10 text-[25px] font-medium">Log in to Button as...</h2>

        <div class="flex justify-center items-center mt-4">
            <div role="tablist" class="tabs tabs-bordered ">
                {{-- company --}}
                <input type="radio" name="my_tabs_1" role="tab" class="tab mx-10 text-xl font-medium hover:text-red-600" aria-label="Company" checked  />
                <div role="tabpanel" class="tab-content pt-5">
                    <div class="max-w-md ">
                        <form class="pt-2 pb-8 mb-4">
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="email">
                              Email
                            </label>
                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">
                          </div>
                          <div class="mb-4">
                            <label class="block  text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="password">
                              Password
                            </label>
                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">
                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="password">
                              Password
                            </label>
                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">
                          </div>
                          <!-- Button continue -->
                            <div class="flex justify-center items-center">
                                <button type="submit"
                                class="mt-8 w-96 text-white bg-black font-bold hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-3">
                                <a href="" class="ml-3 font-normal text-[24px]"> Continue</a>
                                </button>
                            </div>

                            <!-- Button back-->
                            <div class="flex justify-center items-center">
                                <button type="submit"
                                class="mt-4 w-96 text-white bg-[#FF0000] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-3">
                                <a href="/" class="ml-3 font-normal text-[24px]"> Back</a>
                                </button>
                            </div>

                            <div class="text-center mt-3 text-xl">
                                <p>Don’t have an account yet ?  <a href="/registrasi" class="text-blue-500 hover:text-blue-700">Sign in</a></p>
                                <p>Don’t have an account yet ?  <a href="/registrasi" class="text-blue-500 hover:text-blue-700">Sing in</a></p>
                            </div>        
                        </form>
                    </div>
                </div>
              
                {{-- missionary --}}
                <input type="radio" name="my_tabs_1" role="tab" class="tab text-xl font-medium hover:text-red-600" aria-label="Missionary" />
                <div role="tabpanel" class="tab-content pt-5">
                    <div class="max-w-md ">
                        <form class="pt-2 pb-8 mb-4">
                          
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="email">
                              Email
                            </label>
                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="password">
                              Password
                            </label>
                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">
                          </div>
                          <!-- Button continue -->
                            <div class="flex justify-center items-center">
                                <button type="submit"
                                class="mt-8 w-96 text-white bg-black font-bold hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-3">
                                <a href="" class="ml-3 font-normal text-[24px]"> Continue</a>
                                </button>
                            </div>

                            <!-- Button back-->
                            <div class="flex justify-center items-center">
                                <button type="submit"
                                class="mt-4 w-96 text-white bg-[#FF0000] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-3">
                                <a href="/" class="ml-3 font-normal text-[24px]"> Back</a>
                                </button>
                            </div>

                            <div class="text-center mt-3 text-xl">
                                <p>Don’t have an account yet ?  <a href="/registrasi" class="text-blue-500 hover:text-blue-700">Sign in</a></p>
                                <p>Don’t have an account yet ?  <a href="/registrasi" class="text-blue-500 hover:text-blue-700">Sing in</a></p>
                            </div>        
                        </form>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </main>
    </div>
  </section>
  

@endsection
