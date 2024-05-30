@extends('dashboardcompany.layouts.main')
@section('container')
<section class=" pt-64 " >
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-[120px_1fr] lg:gap-8 mx-8 ">
        <a href="/create">
             <div class="h-32 rounded-lg bg-white border-4 border-gray-300 hover:bg-gray-200">
                 <div class="flex justify-center items-center">
                     <img src="/img/add.png" class="mt-4 rounded-full border-2 border-gray-300 p-1" alt="">
                 </div>
                 <h1 class="text-center mt-2 text-black">Create Mission</h1>
             </div>
        </a>
        <div class="h-full rounded-lg bg-white border-4 border-gray-300">
            <h1 class="ml-10 mt-5 text-3xl uppercase tracking-wider font-semibold text-black mb-5">create mission</h1>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-[120px_1fr] lg:gap-8 mx-10 mb-8">
                <div class=" mt-8">
                    <img src="/img/img.png" class="w-full " alt="">
                    <a href="" class="text-center ml-2 hover:text-red-800 text-red-600 text-xl">Edit Picture</a href="">
                </div>
                <div class="">
                    <div class="mb-4">
                        <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Name</label>
                        <input type="text" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 " placeholder="Name of mission" required />
                    </div>
                    
                    <h3 class="block mb-2 text-lg font-medium text-gray-900 ml-1 ">Type Mission</h3>
                    <ul class="grid gap-1 grid-cols-3">
                        <li>
                            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                            <label for="hosting-small" class="inline-flex items-center  justify-between w-32 py-1 text-white bg-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:bg-red-600 hover:text-white hover:bg-red-600 ">                           
                                <div class="text-center">
                                    <div class="text-lg  text-center ml-7 font-semibold tracking-widest">DAILY</div>
                                </div>
                            </label>
                        </li>
                        <li class="ml-[-210px]">
                            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                            <label for="hosting-small" class="inline-flex items-center  justify-between w-32 py-1 text-white bg-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:bg-red-600 hover:text-white hover:bg-red-600 ">                           
                                <div class="text-center">
                                    <div class="text-lg  text-center ml-7 font-semibold tracking-widest">WEEKLY</div>
                                </div>
                            </label>
                        </li>
                        <li class="ml-[-420px]">
                            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                            <label for="hosting-small" class="inline-flex items-center  justify-between w-32 py-1 text-white bg-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:bg-red-600 hover:text-white hover:bg-red-600 ">                           
                                <div class="text-center">
                                    <div class="text-lg  text-center ml-7 font-semibold tracking-widest">MONTHLY</div>
                                </div>
                            </label>
                        </li>
                        
                    </ul>

                    <div class="mb-4">
                        <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Category</label>
                        <input type="text" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 " placeholder=" dropdown " required />
                    </div>
                    <div class="mb-4">
                        <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Deksripsi</label>
                        <input type="text" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 " placeholder=" textarea" required />
                    </div>
                    <div class="mb-4">
                        <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Link(optional)</label>
                        <input type="text" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 " placeholder=" textarea" />
                    </div>

                </div>
            </div>
            
        </div>
</section>
    
    
@endsection