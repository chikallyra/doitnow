<!-- navbar -->
<nav class=" bg-bg fixed z-50 w-full py-4 shadow-lg transition-all duration-300 backdrop:blur-xl bg-[#F4F4F4]">
  <div class=" mx-auto px-4 py-2 flex justify-between items-center">
    <div>
      <a href="#home">
        <img src="/img/logo.png" alt="" class="w-[100px] sm:w-44 md:w-52 lg:w-64 ">
      </a>
     
    </div>
    <div class="container flex justify-end">
      <div class=" hidden lg:flex items-end  justify-end container-fluid">
        <a href="#" class=" nav-link text-[#DD2120] active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2 ">Mission and Reward</a>
        <a href="#" class=" nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2 nav-link">Marketplace</a>
        <a href="./about.html" class=" nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2 ">About Us</a>
        <a href="../src/contact.html" class=" nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2">Contact Us</a>

          {{-- @auth
            <div class="flex  items-center ml-16 mt-2 lg:mt-0  text-primary hover:opacity-30">
                <button type="button" class="text-base mr-[70px] lg:mr-0 inline-flex font-bold" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom"> 
                  <span class="sr-only"></span>
                    <p class="-indent-40 ml-24">Welcome, </p>
                      <div class="ml-2 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512">
                          <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                        </svg>
                      </div>
                </button>
            </div>

                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-[#EDF2F4] divide-y divide-gray-300 rounded-lg shadow" id="user-dropdown">
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
          @endauth --}}
        <a
          class=" nav-link inline-flex rounded-full border border-current  ml-3 px-5 py-1 text-lg font-medium text-[#DD2120] transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-[#DD2120] hover:text-white"
          href="/login"> Login
        </a>
        <a
          class="inline-flex rounded-full border border-current ml-2 mr-5 px-5 py-1 text-lg font-medium text-white bg-black transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-white hover:text-black"
          href="/registrasi"> Sign Up
        </a>
      </div>
    </div>
    
    <div class="">
      <!-- Tombol Hamburger -->
      <button id="btnToggle" class="text-black focus:outline-none lg:hidden">

<nav class=" bg-bg fixed z-50 w-full  py-4 shadow-lg transition-all duration-300 backdrop:blur-xl bg-[#F4F4F4]">
  <div class=" mx-auto px-4 py-2 flex justify-between items-center">
    <div>
      <a href="#home">
        <img src="/img/logo.png" alt="" class="w-[100px] lg:w-64 ">
      </a>
     
    </div>
    <div class="hidden md:flex items-center">
      <a href="#" class=" nav-link text-[#DD2120] active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2 ">Mission and Reward</a>
      <a href="#" class=" nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2 nav-link">Marketplace</a>
      <a href="./about.html" class=" nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2 ">About Us</a>
      <a href="../src/contact.html" class=" nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-3 py-2">Contact Us</a>
      <a
        class=" nav-link inline-block rounded-full border border-current  ml-3 px-5 py-1 text-lg font-medium text-[#DD2120] transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-[#DD2120] hover:text-white"
        href="/login"> Login
      </a>
      <a
        class="inline-block rounded-full border border-current ml-2 mr-5 px-5 py-1 text-lg font-medium text-white bg-black transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-white hover:text-black"
        href="/registrasi"> Sign Up
      </a>
    </div>
    <div class="md:hidden">
      <!-- Tombol Hamburger -->
      <button id="btnToggle" class="text-black focus:outline-none">

        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>
  <!-- Menu Hamburger -->
  <div id="menu" class=" bg-bg text-center lg:hidden">
    <a href="../src/about.html" class="block  sm:text-xl text-black hover:text-gray-300 px-4 py-2">Mission and Reward</a>
    <a href="../src/event.html" class="block  sm:text-xl text-black hover:text-gray-300 px-4 py-2">Marketplace</a>
    <a href="../src/donate.html" class="block  sm:text-xl text-black hover:text-gray-300 px-4 py-2">AboutUs</a>
    <a href="../src/contact.html" class="block  sm:text-xl text-black hover:text-gray-300 px-4 py-2">ContactUs</a>

  <div id="menu" class="md:hidden bg-bg text-center">
    <a href="../src/about.html" class="block text-black hover:text-gray-300 px-4 py-2">Mission and Reward</a>
    <a href="../src/event.html" class="block text-black hover:text-gray-300 px-4 py-2">Marketplace</a>
    <a href="../src/donate.html" class="block text-black hover:text-gray-300 px-4 py-2">AboutUs</a>
    <a href="../src/contact.html" class="block text-black hover:text-gray-300 px-4 py-2">ContactUs</a>

    <a
    class="inline-block rounded-full border border-current  ml-3 px-5 py-1 text-lg font-medium text-[#DD2120] transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-[#DD2120] hover:text-white"
    href="/login"> Login
  </a>
  <a
    class="inline-block rounded-full border border-current ml-2 mr-5 px-5 py-1 text-lg font-medium text-white bg-black transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-white hover:text-black"
    href="/registrasi"> Sign Up
  </a>
  </div>
</nav>
<!-- navbar -->

<!-- navbar -->

