<nav class="bg-red-600 fixed w-full h-44 z-50 shadow-lg shadow-gray-400">
    <div class=" mt-12 lg:mt-5 mx-3" >
        <div class="flex justify-between lg:mx-10 mx-1">
            <a href="{{ route('platform.profil') }}" class="bg-white hover:bg-gray-100 m-2 lg:w-96  px-1.5 lg:py-4 lg:px-3 pr-8 rounded-xl flex justify-start items-center shadow-lg shadow-cyan-500/50 ">
                <img src="/img/profile.png" class="lg:w-16 lg:h-16 w-10 h-10 border-4 rounded-full border-gray-200" alt="">
                <h1 class="ml-2 tracking-wider uppercase text-sm lg:text-lg font-medium text-black "> John Doe <span class="bg-gray-200 p-1 rounded-lg text-[9px] lg:text-sm lg:ml-1">Expert</span></h1>
            </a href="">
            <div class="flex justify-end items-center">
              <a href="{{ route('platform.notif') }}"> <i class="far fa-bell text-3xl lg:m-2 m-5 text-white hover:text-gray-400"></i></a> 
            </div>
        </div>
    </div>
</nav>
