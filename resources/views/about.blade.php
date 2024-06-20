@extends('layouts.main')

@section('container')

  <!-- About Us Section -->
  <section class="bg-white p-8 ">
    <h1 class="pt-28 text-center text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-[#dd211f] via-[#771211] to-[#771211]">About Us</h1>
    <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 p-4">
            <img src="/img/banner.png" alt="Illustration" class="w-full h-auto">
        </div>
        <div class="md:w-1/2 p-4">
            <h1 class="text-5xl font-bold text-red-600">doitnow</h1>
            <p class="mt-4 mb-6 text-gray-900 text-lg">doitnow is a platform that matches mission creators with mission participants. The platform offers a variety of interesting missions that you can complete to earn rewards such as money, vouchers, and products.</p>
            <a href="{{ route('register.miss') }}" class=" bg-red-600 text-white px-10 py-2 rounded-xl shadow-lg text-lg hover:bg-red-800 transition duration-300">Join Us</a href="">
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="bg-[linear-gradient(90deg,rgba(169,25,24,1)_51%,rgba(119,18,17,1)_100%)] text-white py-5 lg:py-20">
    <div class=" mx-auto text-center">
        <h2 class="lg:text-4xl text-xl  font-bold">" Have fun, get paid, and earn rewards with doitnow! "</h2>
    </div>
</section>

<section class="bg-white pb-8 flex justify-center ">
    <div class="border-2 border-white shadow-gray-300 shadow-lg p-5 rounded-xl lg:mt-[-20px]  bg-white  ">
        <h1 class="text-center font-extrabold mb-5 lg:text-3xl text-lg bg-clip-text text-transparent bg-gradient-to-r from-[#dd211f] via-[#771211] to-[#771211]">VISION & MISSION</h1>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 border border-red-500 rounded-lg shadow-lg text-center" data-aos="fade-right">
                <h3 class="text-xl font-bold text-red-500">VISION</h3>
                <p class="mt-4 text-gray-600">To build a community where every task is an opportunity and every achievement is celebrated.</p>
            </div>
            <div class="bg-white p-6 border border-red-500 rounded-lg shadow-lg text-center" data-aos="fade-left">
                <h3 class="text-xl font-bold text-red-500">MISSION</h3>
                <p class="mt-4 text-gray-600">To motivate individuals to accomplish their goals by providing exciting missions and rewarding their efforts.</p>
            </div>
        </div>
    </div>
   
</section>


{{-- Our Team Section --}}
<section class="bg-white pb-8 pt-10 flex justify-center ">
    <div class=" ">
        <h1 class="text-center font-extrabold mb-3 lg:text-3xl text-lg bg-clip-text text-transparent bg-gradient-to-r from-[#dd211f] via-[#771211] to-[#771211]">OUR TEAM</h1>
        <P class="lg:mb-14 text-center mb-5 text-sm lg:text-xl text-gray-500">Meet our diverse team consisting of creators, the UI/UX team, programmers, the digital marketing team</P>
        
        {{-- grid 3 --}}
        <div class=" max-w-7xl lg:mx-auto mx-5 grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- pak tommy --}}
            <div class="bg-red-50 rounded-lg p-6 flex flex-col items-center text-center shadow-lg"  data-aos="flip-left">
                <img class="rounded-full border-8 border-white w-40 h-40 object-cover mb-4" src="img/paktommy.jpg" alt="Jack Clark">
                <h2 class="text-2xl text-slate-900 font-semibold">Tommy Hartanto</h2>
                <p class="text-red-600 mb-1 text-lg ">Project Manager</p>
                <a href="" class=" mb-4 bg-red-600 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/tommyhartono/" target="blank" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/tommyhartonocom?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- pak nollan --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg " data-aos="flip-left">
                <img class="rounded-full border-8 border-white w-40 h-40 object-cover mb-4" src="https://via.placeholder.com/150" alt="Jack Clark">
                <h2 class="text-2xl text-slate-900 font-semibold">pak nollan</h2>
                <p class="text-red-600 mb-1 text-lg ">Project Manager</p>
                <a href="" class=" mb-4 bg-red-600 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="#" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- pak Michell --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="flip-left">
                <img class="rounded-full border-8 border-white w-40 h-40 object-cover mb-4" src="https://via.placeholder.com/150" alt="Jack Clark">
                <h2 class="text-2xl text-slate-900 font-semibold">pak michell</h2>
                <p class="text-red-600 mb-1 text-lg ">Project Manager</p>
                <a href="" class=" mb-4 bg-red-600 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="#" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        {{-- grid 5 --}}
        <div class=" max-w-full  mx-5 grid grid-cols-2 md:grid-cols-5 gap-8 mt-14">
            {{-- Widya Dwi Indrianti --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="/img/team/indri.png" alt="Widya Dwi Indrianti">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Widya Dwi Indrianti</h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">Front-end Development</p>
                <a href="https://drive.google.com/file/d/1ECGvwp8TUE4aQrVNUfqTZVunoviZYz6v/view" class=" mb-4 bg-red-600 px-3 py-1 rounded-xl text-white font-medium hover:bg-red-800">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/widya-dwi-indrianti-31a4ba223/" class="text-gray-600 hover:text-blue-500" target="blank"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/indrii_anti/?hl=id" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Chikal Lyra Saeni Putri  --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/chikal.png" alt="Chikal Lyra Saeni Putri ">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Chikal Lyra Saeni P </h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">Back-end Development</p>
                <a href="https://github.com/chikallyra" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/chikallyra/" target="blank" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/kalqulus?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Ahmad Zilan --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 g:h-40 object-cover mb-4" src="img/team/zilan.png" alt="Ahmad Zilan">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Ahmad Zilan</h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">Back-end Development</p>
                <a href="https://drive.google.com/file/d/13Fd63MCIBu7dLsUipkwu_0jJThUdwoeC/view?usp=drivesdk" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.instagram.com/_ahmadzilan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="balnk" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Nilla Salsa Billa Putri--}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/nilla.png" alt="Nilla Salsa Billa Putri">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Nilla Salsa Billa Putri</h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">UI/UX Desainer</p>
                <a href="https://portofolionillasalsabillaputri.framer.website/" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/nillasalsabillaputri/" target="blank" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/nillaaslsbillaaptr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Noni Widiyanti --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/noni.png" alt="Noni Widiyanti">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Noni Widiyanti</h2>
                <p class="text-red-600 mb-1 text-sm lg:text-lg ">UI/UX Desainer</p>
                <a href="https://www.figma.com/design/b7F2D2ZxUvLZHAOyLxbK7h/Noni-windiYanti?node-id=0-1&t=cBGp10J3PXNyCLYi-0" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.instagram.com/cicichioni?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        {{-- grid 6 --}}
        <div class=" max-w-full  mx-5 grid grid-cols-2 md:grid-cols-6 gap-8 mt-14">
            {{-- Yunda Putri Herawati --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg;w-40 lg:h-40 object-cover mb-4" src="img/team/yunda.png" alt="Yunda Putri Herawati">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Yunda Putri H</h2>
                <p class="text-red-600 mb-1 text-sm lg:text-lg ">UI/UX Desainer</p>
                <a href="https://drive.google.com/file/d/14j7jxjDOPPJXlsEngvHY13PKgPspptlP/view?usp=drivesdk" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.instagram.com/yndptri?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Nona Widaningsih --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/nona.png" alt="Nona Widaningsih">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Nona W</h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm">UI/UX Desainer</p>
                <a href="https://www.figma.com/design/RAuD5FKV7P1ndGAwo0Heri/Portofolio_Nona-Widaningsih?node-id=0-1&t=sQJK6kGcpbYXNIMw-1" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.instagram.com/dynaa__03?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{--  Silvana Zalista Nuraini Ghoyali --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/silvana.png" alt=" Silvana Zalista Nuraini Ghoyali">
                <h2 class="lg:text-xl text-slate-900 font-semibold"> Silvana Zalista</h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">Digital Marketing</p>
                <a href="https://drive.google.com/file/d/11makuMpCYxD19rhVAfgqBS4Xj_RaUdmN/view?usp=drivesdk" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/silvanazlt/" target="blank" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/silsillz?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Yuena Adhalia Putri --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/yuena.png" alt="Yuena Adhalia Putri">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Yuena A P</h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm">Digital Marketing</p>
                <a href="https://drive.google.com/drive/folders/1c7r4bLpAaUGYAtwCKDV70hVw45mnvyhk?usp=sharing" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.instagram.com/vemoyez?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{--Waldah Salasah --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/waldah.png" alt="Waldah Salasah ">
                <h2 class="lg:text-xl text-slate-900 font-semibold">Waldah Salasah </h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">Digital Marketing</p>
                <a href="https://drive.google.com/file/d/1_xPizGz1UHyLRDAnGBxNu7H7DBiuRuUw/view?usp=drivesdk" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/waldah-salasah/" target="blank" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/waldahsh?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            {{-- Wandany Muhamad Faitul Mi'raj --}}
            <div class="bg-red-50  rounded-lg p-6 flex flex-col items-center text-center shadow-lg" data-aos="zoom-in">
                <img class="rounded-full border-8 border-white lg:w-40 lg:h-40 object-cover mb-4" src="img/team/wandany.png" alt=" Wandany Muhamad Faitul Mi'raj ">
                <h2 class="lg:text-xl text-slate-900 font-semibold"> Wandany M F </h2>
                <p class="text-red-600 mb-1 lg:text-lg text-sm ">Digital Marketing</p>
                <a href="https://drive.google.com/drive/folders/1q9Ns3d1yJoAemNTkA30D12Q9wTrV7ZRv?usp=sharing" class=" mb-4 bg-red-600 hover:bg-red-800 px-3 py-1 rounded-xl text-white font-medium">Portofolio</a>
                <div class="flex space-x-3 text-lg">
                  <a href="https://www.linkedin.com/in/wandany-faitul-a90a79249/" target="blank" class="text-gray-600 hover:text-blue-500"><i class="fab fa-linkedin "></i></a>
                  <a href="https://www.instagram.com/wandanyfaitul_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="text-gray-600 hover:text-pink-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>


    </div>
   
</section>
    
@endsection