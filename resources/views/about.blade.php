@extends('layouts.main')

@section('container')
<section class="lg:pt-32 pt-32  bg-white h-full pb-10 lg:pb-32">
    <div class="container">
        <div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 mx-10">
                <div class=" flex justify-center items-center">
                    <img src="/img/banner.png" class="w-[500px]" alt="">
                </div>
                <div class="lg:mt-32 lg:mr-10">
                    <h5 class="text-6xl font-extrabold text-red-600 mb-8">doitnow</h5>
                    <p class="text-black font-medium text-xl">doitnow is a platform that matches mission creators with mission participants. The platform offers a variety of interesting missions that you can complete to earn rewards such as money, vouchers, and products.</p>
                    
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium  mt-5 rounded-full text-lg px-8 py-1 text-center " type="button">
                        Join Us
                    </button>
                        
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50        justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-8 lg:p-10 md:p-5 text-center">
                                        
                                        <h3 class="mb-5 text-lg font-normal text-black  
                                        ">We provide a 
                                        digital marketing platform that supports both business growth and social missions. Join us and leverage technology to achieve your goals more efficiently and effectively.</h3>
                                        <a href="/registrasi" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg inline-flex items-center px-5 py-2.5 text-center">Company</a>
                                        <a href="/registrasi/mission" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium ml-2 rounded-lg text-lg inline-flex items-center px-5 py-2.5 text-center">Missionary</a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFF7F1" fill-opacity="1" d="M0,32L48,37.3C96,43,192,53,288,96C384,139,480,213,576,213.3C672,213,768,139,864,117.3C960,96,1056,128,1152,154.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    
        <div class=" bg-[#FFF7F1] -mt-10 ">
            
            <h1 class="text-center font-semibold text-red-700 text-2xl lg:text-3xl pt-10 lg:pt-0 ">VISION & MISION</h1>
            <p class="border-b-4 mx-44 lg:mx-[700px] text-center pt-2 font-bold border-orange-700"></p>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 mt-5 mx-10 lg:mx-64 lg:mt-14">
                <div class="h-44 rounded-lg bg-[#FFECE4] shadow-lg shadow-gray-300">
                    <h1 class="uppercase text-center text-xl lg:text-2xl text-black font-semibold pt-4">our vision</h1>
                    <p class="text-center lg:text-lg text-black mx-8 font-medium pt-6">To build a community where every task is an opportunity and every achievement is celebrated</p>
                </div>
                <div class="h-44 rounded-lg bg-[#FFECE4] shadow-lg shadow-gray-300 mb-10">
                    <h1 class="uppercase text-center text-xl text-black lg:text-2xl font-semibold pt-4">our mission</h1>
                    <p class="text-center lg:text-lg text-black mx-8 font-medium pt-6">To motivate individuals to accomplish their goals by providing exciting missions and rewarding their efforts.</p>
                </div>
              </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFF7F1" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,117.3C384,117,480,107,576,128C672,149,768,203,864,186.7C960,171,1056,85,1152,90.7C1248,96,1344,192,1392,240L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>

        <div class="pt-14">
            <h1 class="text-center uppercase text-3xl text-red-700 font-semibold">our team</h1>
            <p class="border-b-4 mx-48 lg:mx-[730px] pt-2 font-bold border-orange-700"></p>
            {{-- grid 3 --}}
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-10 lg:mx-44">
                <!-- Team Member 1 -->
                <div class="p-6 text-center">
                  <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/paktommy.jpg" alt="Pak Tommy">
                  <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Tommy Hartono</h2>
                  <p class="text-gray-600 mb-4">Project Manager</p>
                  <a href="" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 2 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/profile.png" alt="Pak Tommy">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">jhon</h2>
                    <p class="text-gray-600 mb-4">Project Manager</p>
                    <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</button>
                  </div>
                <!-- Team Member 3 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/profile.png" alt="Pak Tommy">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">jhon</h2>
                    <p class="text-gray-600 mb-4">Project Manager</p>
                    <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</button>
                </div>
                <!-- Team Member 4 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/indri.jpg" alt="Widya Dwi Indrianti">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Widya Dwi Indrianti</h2>
                    <p class="text-gray-600 mb-4">Frontend Development</p>
                    <a href="https://drive.google.com/file/d/1ECGvwp8TUE4aQrVNUfqTZVunoviZYz6v/view" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 5 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/chikal.jpg" alt="Chikal Lyra">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Chikal Lyra Saeni P </h2>
                    <p class="text-gray-600 mb-4">Backend Development</p>
                    <a href="https://github.com/chikallyra" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 6 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/zilan.png" alt="Ahmad Zilan">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Ahmad Zilan</h2>
                    <p class="text-gray-600 mb-4">Backend Development</p>
                    <a href="" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
            </div>
    
            {{-- grid 4 --}}
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:mx-12">
                <!-- Team Member 1 -->
                <div class="p-6 text-center">
                  <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/nilla.jpg" alt="Nilla salsa Billa">
                  <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Nilla Salsa Billa</h2>
                  <p class="text-gray-600 mb-4">UI/UX Designer</p>
                  <a href="https://portofolionillasalsabillaputri.framer.website/" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 2 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/noni.jpg" alt="Noni">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Noni WindiYanti</h2>
                    <p class="text-gray-600 mb-4">UI/UX Designer</p>
                    <a href="https://www.figma.com/design/b7F2D2ZxUvLZHAOyLxbK7h/Noni-windiYanti?node-id=0-1&t=cBGp10J3PXNyCLYi-0" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                  </div>
                <!-- Team Member 3 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/yunda.jpg" alt="yunda">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Yunda Herawati</h2>
                    <p class="text-gray-600 mb-4">UI/UX Designer</p>
                    <a href="https://drive.google.com/file/d/14j7jxjDOPPJXlsEngvHY13PKgPspptlP/view?usp=drivesdk" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 4 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/nona.jpg" alt="nona">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Nona Widaningsih</h2>
                    <p class="text-gray-600 mb-4">UI/UX Designer</p>
                    <a href="" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 5 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/yuena.jpeg" alt="yuena">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Yuena Adhalia Putri </h2>
                    <p class="text-gray-600 mb-4">Digital Markeler</p>
                    <a href="https://drive.google.com/drive/folders/1c7r4bLpAaUGYAtwCKDV70hVw45mnvyhk?usp=sharing" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 6 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/silvana.png" alt="silvana">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Silvana Zalista Nuraini G </h2>
                    <p class="text-gray-600 mb-4">Digital Markeler</p>
                    <a href="https://drive.google.com/file/d/11makuMpCYxD19rhVAfgqBS4Xj_RaUdmN/view?usp=drivesdk " class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 7 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/waldah.jpg" alt="waldah">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Waldah Salasah </h2>
                    <p class="text-gray-600 mb-4">Digital Markeler</p>
                    <a href="https://drive.google.com/file/d/1_xPizGz1UHyLRDAnGBxNu7H7DBiuRuUw/view?usp=drivesdk" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
                <!-- Team Member 8 -->
                <div class="p-6 text-center">
                    <img class="w-full h-72 object-cover object-center rounded-lg" src="/img/wandany.jpg" alt="wandany">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 mt-3">Wandany M Faitullah </h2>
                    <p class="text-gray-600 mb-4">Digital Markeler</p>
                    <a href="https://drive.google.com/drive/folders/1q9Ns3d1yJoAemNTkA30D12Q9wTrV7ZRv?usp=sharing" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Portofolio</a>
                </div>
            </div>
    </div>
</section>
    
@endsection