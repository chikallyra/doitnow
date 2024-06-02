@extends('layouts.main')
@section('container')
    <section class="bg-white h-full">
        <div class="container pt-32 px-10">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                <div class="">
                    <img src="/img/banner.png" alt="">
                </div>
                <div class=" mb-20 mt-28">
                    <div class="flex justify-center items-center mb-10">
                        <h1 class="text-3xl font-semibold text-red-600">Contact Us</h1>
                    </div>
                    
                    <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                                <input type="text" id="Username" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Username" />
                                <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                                First Name
                                </span>
                                </label>
                            </div>
                            <div>
                                <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                                <input type="text" id="Username" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Username" />
                                <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                                Last Name
                                </span>
                                </label>
                            </div>     
                        </div>
                        <div class="mb-6">
                            <label for="email" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                            <input type="email" id="email" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Email" />
                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                            Email
                            </span>
                            </label>
                        </div>
                        <div class="mb-6">
                            <label for="tel" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                            <input type="tel" id="tel" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Email" />
                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                            Phone Number
                            </span>
                            </label>
                        </div>
                        <div class="mb-6 ">
                            <label for="message" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                              <textarea id="message" rows="2"  class="peer border-none bg-transparent placeholder-transparent py-3 px-4 focus:border-transparent focus:outline-none focus:ring-0 w-full" required placeholder="Message"></textarea>
                              <span class="pointer-events-none absolute left-3 top-0 -translate-y-1/2 bg-white px-1 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/4 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                                Message
                              </span>
                            </label>
                        </div>
                          <div class="flex justify-center items-center">
                            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg w-full sm:w-auto px-10 py-2.5 text-center ">Submit</button>
                          </div>
                        
                    </form>

                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-8 lg:mx-96  ">
                <div class="h-48 lg:w-72 rounded-lg bg-white border-2 shadow-lg shadow-gray-300">
                    <div class="flex justify-center items-center">
                        <p class="bg-[#F9D2BC] mt-5 rounded-lg "><i class="fas fa-envelope text-5xl p-6 text-gray-900"></i></p>
                    </div>
                    <h1 class="text-center mt-1 text-xl text-black font-semibold">Email</h1>
                    <p class="text-center mt-1 text-lg text-black font-semibold">info@doitnow.id </p>
                </div>
                <div class="h-48 lg:w-72 rounded-lg bg-white border-2 shadow-lg shadow-gray-300 mb-10">
                    <div class="flex justify-center items-center">
                        <p class="bg-[#F9D2BC] mt-5 rounded-lg "><i class="fas fa-phone-alt text-5xl p-6 text-gray-900"></i></p>
                    </div>
                    <h1 class="text-center mt-1 text-xl text-black font-semibold">Phone</h1>
                    <p class="text-center mt-1 text-lg text-black font-semibold">+628892626889</p>
                </div>
              </div>
        </div>

    </section>
@endsection