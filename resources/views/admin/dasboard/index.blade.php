@extends('admin.dasboard.layouts.maindashboard')

@section('container')
    <section class="bg-white ">
        <h1 class="ml-10 py-10 text-4xl font-bold text-slate-900 ">Welcome Back, Admin</h1>
        <div class=" flex justify-start items-center">
            <div class="grid grid-cols-4 gap-2 lg:grid-cols-4 lg:gap-8 mt-10 lg:mx-10 mx-5  ">
                <a href="" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                    <div class="h-24 w-20 lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                        <div class="flex justify-center items-center mt-4">
                            <div class="bg-[#F9D2BC] rounded-full h-14 w-14">
                                <div class="flex justify-center items-center">
                                    <i class="fas fa-user text-4xl pt-2 text-red-600"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-center text-black font-medium  text-base px-2 pt-1 ">User Monitoring</h1>
                    </div>
                </a>
                <a href="{{ route('table.blog') }}" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                    <div class="h-24 w-20 lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                        <div class="flex justify-center items-center mt-4">
                            <div class="bg-[#F9D2BC] rounded-full h-14 w-14">
                                <div class="flex justify-center items-center">
                                    <i class="fab fa-blogger-b text-4xl  text-red-600 p-2"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-center text-black font-medium  text-base px-2 pt-3">Blog Content</h1>
                    </div>
                </a>
                <a href="{{ route('categories.home') }}" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                    <div class="h-24 w-20 lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                        <div class="flex justify-center items-center mt-4">
                            <div class="bg-[#F9D2BC] rounded-full h-14 w-14">
                                <div class="flex justify-center items-center">
                                    <i class="fas fa-th-large text-4xl pt-2 text-red-600"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-center text-black font-medium  text-base px-2 pt-1 ">Categories</h1>
                    </div>
                </a>
                <a href="{{ route('question.home') }}" class="transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-200 duration-300">
                    <div class="h-24 w-20 lg:h-32 lg:w-32  rounded-lg bg-white shadow-lg shadow-gray-400 border-2 hover:bg-gray-100">
                        <div class="flex justify-center items-center mt-4">
                            <div class="bg-[#F9D2BC] rounded-full h-14 w-14">
                                <div class="flex justify-center items-center">
                                    <i class="far fa-question-circle  text-4xl pt-2 text-red-600"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-center text-black font-medium  text-base px-2 pt-1 ">Question</h1>
                    </div>
                </a>
                
                
            </div>
        </div>

        <div class="bg-white h-[850px]">
            
            <form class="max-w-md pt-28 mx-10 ">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-red-300 rounded-full bg-gray-50 focus:ring-red-500 focus:border-red-500 " placeholder="Find user" required />    
                </div>
            </form>

            <div class="mx-10 mt-10">
                
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-white uppercase bg-red-600 text-center">
                            <tr>
                                <th scope="col" class="px-6 py-3 ">
                                    User Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Completed Mission
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rewards Earned
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                
                            
                            <tr class="bg-red-100 text-black text-center">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    {{ $user->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <td class="px-6 py-4">
                                    Rp.88.000
                                </td>
                                <td class="px-6 py-4">
                                    Aktif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="grid grid-cols-4 gap-4">
                                        <!-- View Button -->
                                        <div>
                                            <a href=""><i class="far fa-eye hover:text-green-500"></i></a> 
                                        </div>
                                        
                                        <!-- Edit Button -->
                                        <div>
                                            <a href="{{ route('user.edit', $user->id) }}"><i class="far fa-edit hover:text-yellow-500"></i></a>
                                        </div>
                                        
                                        <!-- Delete Button -->
                                        <div>
                                            <a href=""><i class="far fa-trash-alt hover:text-red-500"></i></a>
                                        </div>
                                        
                                        <!-- Ban/Unban Button -->
                                        <div>
                                            @if($user->is_banned)
                                                <form action="{{ route('user.unban', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="text-white bg-green-500 hover:bg-green-700 rounded-lg px-2 py-1"><i class="fas fa-unlock"></i></button>
                                                </form>
                                            @else
                                                <form action="{{ route('user.ban', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="text-white bg-red-500 hover:bg-red-700 rounded-lg px-2 py-1"><i class="fas fa-ban"></i></button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                
                            @endforeach
                            
                            {{-- <tr class="bg-red-100 text-black text-center">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    001
                                </th>
                                <td class="px-6 py-4">
                                    Jhon
                                </td>
                                <td class="px-6 py-4">
                                    jhon@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <td class="px-6 py-4">
                                    Rp.88.000
                                </td>
                                <td class="px-6 py-4">
                                    Aktif
                                </td>
                                <td class="px-6 py-4  ">
                                    <div class="grid grid-cols-3 ">
                                        <div>
                                           <a href=""><i class="far fa-eye hover:text-green-500"></i></a> 
                                        </div>
                                        <div class="">
                                            <a href=""><i class="far fa-edit hover:text-yellow-500"></i></a>
                                        </div>
                                        <div>
                                            <a href=""><i class="far fa-trash-alt hover:text-red-500"></i></a>
                                        </div>
                                      </div>
                                </td>
                            </tr>
                            <tr class="bg-red-100 text-black text-center">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    001
                                </th>
                                <td class="px-6 py-4">
                                    Jhon
                                </td>
                                <td class="px-6 py-4">
                                    jhon@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <td class="px-6 py-4">
                                    Rp.88.000
                                </td>
                                <td class="px-6 py-4">
                                    Aktif
                                </td>
                                <td class="px-6 py-4  ">
                                    <div class="grid grid-cols-3 ">
                                        <div>
                                           <a href=""><i class="far fa-eye hover:text-green-500"></i></a> 
                                        </div>
                                        <div class="">
                                            <a href=""><i class="far fa-edit hover:text-yellow-500"></i></a>
                                        </div>
                                        <div>
                                            <a href=""><i class="far fa-trash-alt hover:text-red-500"></i></a>
                                        </div>
                                      </div>
                                </td>
                            </tr>
                            <tr class="bg-red-100 text-black text-center">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    001
                                </th>
                                <td class="px-6 py-4">
                                    Jhon
                                </td>
                                <td class="px-6 py-4">
                                    jhon@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <td class="px-6 py-4">
                                    Rp.88.000
                                </td>
                                <td class="px-6 py-4">
                                    Aktif
                                </td>
                                <td class="px-6 py-4  ">
                                    <div class="grid grid-cols-3 ">
                                        <div>
                                           <a href=""><i class="far fa-eye hover:text-green-500"></i></a> 
                                        </div>
                                        <div class="">
                                            <a href=""><i class="far fa-edit hover:text-yellow-500"></i></a>
                                        </div>
                                        <div>
                                            <a href=""><i class="far fa-trash-alt hover:text-red-500"></i></a>
                                        </div>
                                      </div>
                                </td>
                            </tr> --}}
                            
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="flex justify-center items-center mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="flex items-center -space-x-px h-8 text-sm">
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">
                          <span class="sr-only">Previous</span>
                          <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                      </li>
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                      </li>
                      <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">3</a>
                      </li>
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                      </li>
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                      </li>
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">
                          <span class="sr-only">Next</span>
                          <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>

        </div>
    </section>
@endsection