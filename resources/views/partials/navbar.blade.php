<!-- navbar -->
@guest
<nav class=" fixed z-50 w-full py-4 shadow-lg bg-[#F4F4F4]">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/img/logo.png" class="h-8" alt="doitnow" />
        
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex text-center flex-col p-2 md:p-0 mt-5 md:flex-row bg-[#F4F4F4] md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  ">
        {{-- <li>
          <a href="#" class="nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-1 py-2" aria-current="page">Mission and Reward</a>
        </li>
        <li>
          <a href="#" class="nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-1 py-2">Marketplace</a>
        </li> --}}
        <li>
          <a href="/" class="nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-1 py-2">Home</a>
        </li>
        <li>
          <a href="/blog" class="nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-1 py-2">Blog</a>
        </li>
        <li>
          <a href="/about" class="nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-1 py-2">About Us</a>
        </li>
        <li>
          <a href="/contact" class="nav-link text-black active:text-[#DD2120] font-semibold text-lg hover:text-[#DD2120] px-1 py-2">Contact Us</a>
        </li>
        <li>
          <a href="/login" class="inline-block rounded-full border border-current  ml-3 px-10 py-1 text-lg font-medium text-[#DD2120] transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-white hover:bg-[#DD2120] hover:text-white">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endguest
<!-- navbar -->
