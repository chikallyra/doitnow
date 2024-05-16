<!-- navbar -->
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