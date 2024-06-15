@extends('layouts.main')
@section('container')
     
<section class="bg-white h-full flex justify-center ">
        <div class="container pt-32 lg:mx-0 mx-10">
            {{-- awal --}}
            <div class="grid grid-cols-1 gap-0.5 lg:grid-cols-2 lg:gap-8">
                <div class="">
                    <img src="/img/banner.png" alt="">
                </div>
                <div class=" mb-20 mt-28">
                    <div class="flex justify-center items-center mb-10">
                        <h1 class="text-3xl lg:text-4xl font-semibold text-red-600">Contact Us</h1>
                    </div>
                    
                    <form action="{{ route('question') }}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                                <input type="text" name="first_name" id="Username" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Username" />
                                <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                                First Name
                                </span>
                                </label>
                            </div>
                            <div>
                                <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                                <input type="text" name="last_name"" id="Username" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Username" />
                                <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                                Last Name
                                </span>
                                </label>
                            </div>     
                        </div>
                        <div class="mb-6">
                            <label for="email" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                            <input type="email" name="email" id="email" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Email" />
                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                            Email
                            </span>
                            </label>
                        </div>
                        <div class="mb-6">
                            <label for="tel" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                            <input type="tel" name="phone" id="tel" class="peer border-none bg-transparent placeholder-transparent py-3 focus:border-transparent focus:outline-none focus:ring-0  " required placeholder="Email" />
                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xl text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-lg">
                            Phone Number
                            </span>
                            </label>
                        </div>
                        <div class="mb-6 ">
                            <label for="message" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-red-600 focus-within:ring-1 focus-within:ring-red-600">
                              <textarea id="message" name="message" rows="2"  class="peer border-none bg-transparent placeholder-transparent py-3 px-4 focus:border-transparent focus:outline-none focus:ring-0 w-full" required placeholder="Message"></textarea>
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

            {{-- card --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10 mb-10">
                <!-- Kartu Alamat -->
                <div class="bg-white p-3 rounded-lg border shadow-xl hover:shadow-lg transition-shadow">
                  <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-red-100 text-red-500 mx-auto ">
                    <i class="fas fa-map-marker-alt text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Address</h3>
                  <p class="text-gray-600 mb-4 text-center text-lg">PP, Jl. Duta Harapan Indah No.19, RT.8/RW.2 14460 Daerah Khusus Ibukota Jakarta Jawa</p>
                  <a href="https://www.bing.com/ck/a?!&&p=42c0fce203124634JmltdHM9MTcxODQwOTYwMCZpZ3VpZD0wZGEzZjBlNi1kMjEyLTY1MmYtMjA1NC1lMjUwZDM0NDY0NmQmaW5zaWQ9NTQ3Mw&ptn=3&ver=2&hsh=3&fclid=0da3f0e6-d212-652f-2054-e250d344646d&u=a1L21hcHM_Jm1lcGk9MTA5fn5Ub3BPZlBhZ2V-QWRkcmVzc19MaW5rJnR5PTE4JnE9UFQlMjBQZWxvcG9yJTIwSWRlJTIwS3JlYXRpZiZzcz15cGlkLllONzk5OXg5NTYxMTczMjU3OTU5MjQ0NjkmcHBvaXM9LTYuMTM1ODgxOTAwNzg3MzUzNV8xMDYuNzcyMzYxNzU1MzcxMV9QVCUyMFBlbG9wb3IlMjBJZGUlMjBLcmVhdGlmX1lONzk5OXg5NTYxMTczMjU3OTU5MjQ0Njl-JmNwPS02LjEzNTg4Mn4xMDYuNzcyMzYyJnY9MiZzVj0xJkZPUk09TVBTUlBM&ntb=1" class="text-orange-500 font-medium hover:underline" target="_blank" rel="noopener noreferrer">View on map &rarr;</a>
                </div>
                
                <!-- Kartu contact -->
                <div class="bg-white p-3 rounded-lg border shadow-xl hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-red-100 text-red-500 mx-auto ">
                        <i class="fas fa-phone text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Contact</h3>
                    <p class="text-gray-600 mb-1 text-center text-lg"><a href="mailto:support@mailerbakery.com" target="_blank" rel="noopener noreferrer" class="hover:underline">+62 8892 626 889</a></p>
                </div>

                  <!-- Kartu email -->
                <div class="bg-white p-3 rounded-lg border shadow-xl hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-red-100 text-red-500 mx-auto ">
                        <i class="fas fa-envelope text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Email</h3>
                    <p class="text-gray-600 mb-1 text-center text-lg"><a href="mailto:info@doitnow.id" target="_blank" rel="noopener noreferrer" class="hover:underline">info@doitnow.id</a></p>        
                </div>
            </div>

    </section>

  
@endsection