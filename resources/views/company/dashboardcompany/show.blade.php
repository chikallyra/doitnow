@extends('company.dashboardcompany.layouts.main')
 @section('container')
 
 <div class="py-52 h-full mx-10">
    <h1 class="font-bold text-5xl text-red-600 mb-9">Show Detail</h1>
    <div class="flex justify-between items-center mb-3">
        <a href="{{ route ('company') }}" class="bg-red-400 px-5 py-1 rounded-xl text-base hover:bg-red-500 text-white font-medium  ">Back</a>
        <div class="flex justify-end">
            <a href="{{ route('edit.mission') }}" class="bg-yellow-600 px-5 py-1 rounded-xl text-base hover:bg-yellow-800 text-white font-medium mr-2  ">Edit</a>
            <a href="" class="bg-red-700 px-5 py-1 rounded-xl text-base hover:bg-red-800 text-white font-medium  ">Delete</a>
        </div>     
    </div>
    <div class="border-2 border-gray-500 rounded-xl">
        <div class="flex justify-center items-center py-8">
            <img src="/img/blog2.png" class=" w-72 h-72" alt="mission">       
        </div>
        
        <div class="flex justify-center  ">
            <div class=" overflow-hidden max-w-full mx-96">
                <!-- Content -->
                <div class="p-4 text-black  ">
                    <!-- Entry 1 -->
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Mission Name <span class="ml-8">:</span> </div>
                        <div class=" text-lg ml-[-10px]"> Gemifikasi</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Category <span class="ml-[76px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px]"> Game</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Mission Activate <span class="ml-[14px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px]"> 12 Nov - 15 Nov</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Mission Targets <span class="ml-5">:</span> </div>
                       <div class=" text-lg  ml-[-10px]"> 50 <span>participant</span></div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Link <span class="ml-[117px]">:</span> </div>
                       <div class=" text-lg underline  ml-[-10px]"> https://www.maxy.academy/</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Rewards <span class="ml-[80px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px] "> <span>Rp.</span> 88.000</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Existing Reward <span class="ml-[15px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px] "> <span>Rp.</span> 98.000</div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Steps <span class="ml-[105px]">:</span> </div>
                       <div class=" text-lg  ml-[-10px] "> 
                        <ul class=" list-disc">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                       </div>
                    </div>
                    <div class="grid grid-cols-2  py-2">
                        <div class="text-gray-900  text-lg font-bold">Existing Reward <span class="ml-[15px]">:</span> </div>
                       <div class=" text-lg  ml-[-19px] "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error placeat molestias ipsam voluptatibus, dolorem dolor eos doloribus perferendis voluptates doloremque quidem corporis suscipit at accusantium tenetur illo laudantium incidunt.</div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        

    </div>
 </div>
     
 @endsection