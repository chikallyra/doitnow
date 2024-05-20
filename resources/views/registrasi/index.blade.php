@extends('layouts.mainlogin')

@section('container')
     
<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section class="relative flex h-44 items-center bg-red-600 lg:col-span-5 lg:h-full xl:col-span-6">
            <img src="/img/loginbanner.png" class="flex justify-center items-center px-32" alt="">
      </section>

      <main class="flex items-center justify-center px-8  sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
        <div class="max-w-xl lg:w-full lg:mt-[-50px]">

          <h1 class="mt-6 text-[45px] text-center font-bold text-gray-900 sm:text-3xl md:text-4xl">
            Create your account
          </h1>
  
          <p class="mt-1 text-center leading-relaxed text-gray-500">
              Get started  - deliver your best work with us
          </p>
          <h2 class="text-center mt-10 text-[25px] font-medium">Sign in to Button as...</h2>

            <div class="flex justify-center items-center mt-4">
              <div role="tablist" class="tabs tabs-bordered ">
                {{-- company --}}
                <input type="radio" name="my_tabs_1" role="tab" class="tab mx-10 text-xl font-medium hover:text-red-600" aria-label="Company" checked  />
                <div role="tabpanel" class="tab-content pt-5">
                    <div class="max-w-md ">
                      <form class="max-w-sm mx-auto " action="{{ route('register.company') }}" method="POST">
                        @csrf
                        <div class="mb-5">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                          <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full name company's" name="name" required />
                          @error('name')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
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
                        <div class="mb-5">
                          <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                          <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full phone number company's" name="phone" required />
                          @error('phone')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <!-- Button Login -->
                          <button type="submit"class="w-full text-white bg-black mb-5 font-bold text-[24px] hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-black rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                      </form>
                        <!-- Button back -->
                        <div class="flex justify-center items-center">
                          <a href="/" class="  text-white bg-[#FF0000] px-36 font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-2.5 text-center">Back</a> 
                        </div>
                          <div class="text-center mt-3 text-lg">
                            <p class=" text-gray-500">Already have an account ? <a href="/login" class="text-blue-500 hover:text-blue-700">Log in</a></p>
                        </div>  

                      </form>
                    </div>
                </div>
              
                {{-- missionary --}}
                <input type="radio" name="my_tabs_1" role="tab" class="tab text-xl font-medium hover:text-red-600" aria-label="Missionary" />
                <div role="tabpanel" class="tab-content pt-5">
                  <div class="max-w-md ">
                    <form class="max-w-sm mx-auto " action="{{ route('register.user') }}" method="POST">
                      @csrf
                      <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full name " name="name" required />
                        @error('name')
                          <div class="text-red-500">
                              {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full email " name="email" required />
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
                      <div class="mb-5">
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="text" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full phone number " name="phone" required />
                        @error('number')
                          <div class="text-red-500">
                              {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <!-- Button Login -->
                        <button type="submit"class="w-full text-white bg-black mb-5 font-bold text-[24px] hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-black rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                    </form>
                      <!-- Button back -->
                      <div class="flex justify-center items-center">
                        <a href="/" class="  text-white bg-[#FF0000] px-36 font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm  py-2.5 text-center">Back</a> 
                      </div>
                        <div class="text-center mt-3 text-lg">
                          <p class=" text-gray-500">Already have an account ? <a href="/login" class="text-blue-500 hover:text-blue-700">Log in</a></p>
                      </div>  

                    </form>
                  </div>
              </div>
            </div>
            </div>
        </div>
      </main>
     
      <main
      class="flex items-center justify-center px-8  sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
    >
      <div class="max-w-xl lg:w-full lg:mt-[-50px]">

        <h1 class="mt-6 text-[45px] text-center font-bold text-gray-900 sm:text-3xl md:text-4xl">
          Create your account
        </h1>

        <p class="mt-1 text-center leading-relaxed text-gray-500">
            Get started  - deliver your best work with us
        </p>
        <h2 class="text-center mt-10 text-[25px] font-medium">Sign in to Button as...</h2>

        <div class="flex justify-center items-center mt-4">
            <div role="tablist" class="tabs tabs-bordered ">
                {{-- company --}}
                <input type="radio" name="my_tabs_1" role="tab" class="tab mx-10 text-xl font-medium hover:text-red-600" aria-label="Company" checked />
                <div role="tabpanel" class="tab-content pt-5">
                    <div class="max-w-md ">
                        <form class="pt-2 pb-8 mb-4">
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="name">
                              Name
                            </label>
                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your full name">
                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your full name">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="email">
                              Email
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">

                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="password">
                              Password
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="admin-id">
                              Phone number
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="admin-id" type="text" placeholder="Enter your personal or company number">

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="admin-id" type="text" placeholder="Enter your personal or company number">
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
                                <p>Already have an account ? <a href="/login" class="text-blue-500 hover:text-blue-700">Log in</a></p>
                            </div>        
                        </form>
                    </div>                     
                </div>
              
                {{-- Missionary --}}
                <input type="radio" name="my_tabs_1" role="tab" class="tab text-xl font-medium hover:text-red-600" aria-label="Missionary" />
                <div role="tabpanel" class="tab-content pt-5">
                    <div class="max-w-md ">
                        <form class="pt-2 pb-8 mb-4">
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="name">
                              Name
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your full name">

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your full name">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="email">
                              Email
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">
                          </div> 

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your full email">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="password">
                              Password
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter at least 8 characters">
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-lg font-bold mb-2 lg:ml-0 ml-4" for="admin-id">
                              Phone number
                            </label>

                            <input class="shadow bg-white appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="admin-id" type="text" placeholder="Enter your phone number">

                            <input class="shadow appearance-none border rounded-lg lg:w-full w-96 lg:ml-0 ml-3 py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="admin-id" type="text" placeholder="Enter your phone number">
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
                                <p>Already have an account ? <a href="/login" class="text-blue-500 hover:text-blue-700">Log in</a></p>
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