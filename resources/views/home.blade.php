@extends('layouts.main')

@section('container')

<section class=" ">
  {{-- banner --}}
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-10 lg:pt-72 lg:place-items-auto  place-items-center  ">
      <div class=" pt-12  lg:order-none order-2 ">
        <div class="lg:ml-20 mt-[-330px] sm:mt-[-580px] lg:mt-[-380px]  animate-text-banner md:mt-[-370px] md:text-center lg:text-left lg:mx-0  text-center mx-10 ">
          <h1 class="lg:text-[100px] md:text-[100px] text-4xl sm:text-7xl font-bold text-[#DD2120]">doitnow</h1>
          <p class="font-semibold md:mt-3 lg:mt-14 mt-2 text-black sm:text-3xl lg:text-[36px] text-xl lg:leading-9 ">The ultimate online mission platform that makes earning rewards a blast!</p>
          <p class="font-semibold mt-5  text-black sm:text-3xl text-xl lg:text-[36px] lg:leading-9 ">Find your exciting adventure while completing mission and getting attractive reward!</p>
          
          {{-- tombol --}}
          <div class=" container flex justify-center items-center">
            <div class="grid grid-cols-2 gap-2 sm:gap-x-0 lg:grid-cols-2 lg:gap-8">       
              <div class="">
                <a class="group relative inline-flex items-center overflow-hidden rounded-full mt-10 bg-[#DD2120] px-5 sm:px-16  lg:px-16 py-3  text-white focus:outline-none focus:ring active:bg-black" href="/about">
                  <span class="absolute -end-full transition-all group-hover:end-4">
                      <svg
                        class="size-5 rtl:rotate-180"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                      </svg>
                  </span>
                    <span class="lg:text-[24px] sm:text-xl md:text-3xl font-bold transition-all group-hover:me-4">Learn More</span>
                </a>
              </div>
            </div>  
          </div>
          
        </div>
      </div>

      <div class="lg:order-none lg:w-full lg:pt-32  order-1 ">
        <div class="container mx-auto flex justify-center items-center ">
          <img src="../img/banner.png" class="animated-image-banner mt-20 w-72 pl-10  md:w-[500px] md:mx-0 lg:w-[600px] lg:mt-[-280px] sm:w-96  "  alt="">
        </div> 
        <div class="container flex justify-end">
          <img src="/img/bg1.png" class="mt-[-100px] z-[-20px] md:mt-[-380px] lg:mt-[-440px] lg:w-full " alt="">
        </div>
        
      </div>
    </div>
  {{-- end banner --}}

  <!-- conten1 -->
  <section class="lg:mt-[-200px] md:mt-14 sm:mt-[-180px] my-5 text-center flex items-center justify-center  background  lg:h-44 h-20 w-full">
    <h1 class="font-bold text-white lg:text-[50px] md:text-3xl sm:text-2xl text-base ">Have fun, get paid, and earn rewards with doitnow!</h1>  
  </section>
  <!--  end conten1 -->

  <!-- content 2 perhitungan-->
  <section class="lg:mt-36 mt-3 pt-10 text-center background1 mb-10">
    <div class="grid grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 gap-10 mx-10 mt-[-50px] lg:mt-12">
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl font-bold">
        <img src="../img/Users.png" class="lg:mt-[-10px]" alt="">
        <span id="counter1" class="count text-black lg:text-[76px] text-2xl lg:mb-7 lg:mt-[-10px] sm:text-3xl md:text-4xl">0</span>
        <p class="text-xl lg:text-4xl text-black">Users Registered</p>
      </div>
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl font-bold lg:mx-24">
        <img src="../img/Money Bag.png" class="mt-2 lg:mt-8" alt="">
        <span id="counter2" class="count text-black lg:text-[76px] text-2xl sm:text-3xl md:text-4xl lg:mb-7">0</span>
        <p class="text-xl lg:text-4xl text-black">Total Earned</p>
      </div>
      <div class="counter flex flex-col justify-center items-center py-8 rounded-lg text-3xl sm:mt-3 font-bold">
        <img src="../img/Handshake Heart.png" class="mt-[-25px] lg:mt-6" alt="">
        <span id="counter3" class="count text-black sm:text-3xl md:text-4xl lg:text-[76px] text-2xl lg:mt-1 lg:mb-5">0</span>
        <p class="text-xl lg:text-4xl text-black">Collaborator</p>
      </div>
    </div>
  </section>
  <!-- end content 2 perhitungan -->

  {{-- content 3 position --}}
  <div class="container flex justify-center items-center">
    <div class="relative w-full h-screen lg:mt-36 mt-8 ">
      
      <div class="absolute top-0 right-0 lg:w-28 lg:h-28 w-20 h-20 mt-10 rounded-full bg-white animate-lingkaran animate-bullet-top">
        <div class="flex mt-[-36px] ml-[-56px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top"></div>
      </div>
      <div class="lg:mx-32 lg:pt-0 pt-28">
        <h1 class="lg:text-[63px] text-xl mb-10 mt-[-50px] lg:pt-20 lg:h-36 lg:ml-0 ml-8 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101] to-[#FF0000] sm:text-4xl md:text-5xl  ">What is your position ?</h1>
          <div class="grid grid-cols-2  lg:grid-cols-2 lg:gap-8 lg:mt-14 lg:mx-24 ">
            {{-- company --}}
            <a href="/registrasi" class="block transition duration-300 transform hover:scale-105  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
              <div class="lg:h-32  flex justify-center py-3 lg:py-0 content-center shadow-lg shadow-slate-500 rounded-lg bg-grid  ">
                <div class="flex justify-center items-center ">
                  <h1 class="text-white text-xl lg:text-5xl mx-1"><span><i class="fas fa-building mr-3"></i></span>Company</h1>
                  {{-- <img src="../img/company.png" class="lg:w-16 w-8  sm:w-11 md:w-14" alt="">
                  <p class="lg:text-4xl text-lg lg:ml-4 mx-2 sm:text-3xl font-semibold text-white">Company </p>
                  <i class="fas fa-chevron-right text-sm text-white sm:text-2xl  lg:text-4xl pt-1 ml-1 lg:pt-3 lg:ml-5 "></i> --}}
                </div>  
              </div>
            </a>
                {{-- missionary --}}
                <a href="/registrasi/mission" class="block transition duration-300 transform hover:scale-105  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                  <div class="lg:h-32  flex justify-center py-3 lg:py-0 content-center shadow-lg shadow-slate-500 rounded-lg bg-grid  ">
                    <div class="flex justify-center items-center ">
                      <h1 class="text-white text-xl lg:text-5xl mx-1"><span><i class="fas fa-clipboard-list mr-3"></i></span>Missionary</h1>
                    </div>  
                  </div>
                </a>
          </div>
      </div>
      <img src="/img/bg2.png" class="lg:mt-[-100px} mt-[-120px] w-64" alt="">
    </div>
  </div>
  {{-- end content 3 popup --}}

  {{-- content 4 company --}}
  <section class=" container pt-48 sm:pt-0 lg:pt-0 lg:mt-[-200px] mt-[-600px] sm:mt-[-600px] md:mt-[-630px]  ">
    <h2 class=" lg:text-[53px] text-2xl h-20 mx-5 lg:ml-32 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101] sm:text-4xl  to-[#FF0000]">Do you as a company?</h2>
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-8 mx-5 -mt-8">
      <div class="h-96 lg:ml-32 text-sm md:text-3xl  lg:text-[34px] sm:text-xl font-semibold lg:mt-5 mt-3">
        <p class="mb-1 lg:mb-5 lg:leading-9 md:mb-2 text-black" data-aos="fade-right">Connecting you with a community</p>
        <p class="mb-1 lg:mb-5 md:mb-2 text-black" data-aos="fade-left">of active, reward-seeking</p>
        <p class="mb-1 lg:mb-5 md:mb-2 text-black" data-aos="fade-right">individuals eager to interact with</p>
        <p class="mb-3 lg:mb-8 md:mb-5 text-black" data-aos="fade-left">your brand</p>
          {{-- company --}}
        
            <!-- Modal toggle -->
            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block border rounded-lg text-[26px] lg:text-3xl px-8 py-1 lg:px-12 sm:px-10 sm:text-2xl md:text-3xl lg:py-3 bg-[#DD2120] text-white transition custom-btn inline-blocfont-semibold shadow-xl shadow-slate-300  duration-300 transform hover:scale-105 font-medium text-sm text-center" type="button">
              Get started
            </button>

            <!-- Main modal -->
            <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <section class="rounded-3xl shadow-2xl">
                          <div class="p-8 text-center sm:p-12">
                            <p class="text-lg font-semibold uppercase tracking-widest text-red-600">
                              Gain Brand Loyalty with DoitNow!
                            </p>
                        
                            <h2 class="mt-6 text-3xl font-bold"> Supercharge Your Marketing! Reach Engaged Audiences with DoitNow. </h2>
                        
                            <a
                              class="mt-8 inline-block w-full rounded-full bg-red-600 py-4 text-sm font-bold text-white shadow-xl transition custom-btn inline-blocfont-semibold  shadow-slate-300  duration-300 transform hover:scale-105"
                              href="/registrasi"
                            >
                              Started doitnow
                            </a>
                          </div>
                        </section>
                    </div>
                </div>
            </div>

      </div>
      <div class="h-32 ">
        <img src="/img/grafik.png" class="w-32  lg:ml-32 lg:w-[400px] sm:w-96" alt="" data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500">
      </div>
    </div>
  </section> 
  {{-- end content 4 compony --}}

  {{-- content 5 missionary --}}
  <div class=" mt-4 md:mt-8 lg:mt-[-130px] sm:mt-36 ">
    <div class="flex justify-end items-end">
      <img src="/img/bg3.png" class="z-[-30px] md:w-56 md:h-56 md:mt-[10px] mt-[-200px] w-40 h-40 lg:w-64 lg:h-64 lg:mt-96  " alt="">
    </div>
    
    <div class=" flex justify-center lg:mt-[-180px]">
      <img src="/img/bg4.png" class="z-[-30px]  mt-[-200px] lg:mt-[-30px] w-24 h-24 " alt="">
    </div>
    
    <section class="  lg:mt-[-300px] mt-[-170px]  ">
      
      <div class="grid grid-cols-2 gap-1 lg:grid-cols-3 lg:gap-8">
        <div class=" mt-10 ">
          <img src="/img/hp.png" class="w-32 ml-[30px] md:w-56 sm:w-48 lg:w-80" alt="hp" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500">
        </div>
        
        <div class=" lg:mt-20 md:mt-10 md:ml-[-80px] lg:ml-0 sm:ml-[-80px] sm:mt-8 ml-[-30px] lg:col-span-2">      
          <h1 class="lg:text-[60px] lg:mb-28 md:text-4xl py-3 sm:text-3xl text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#010101]  to-[#FF0000]">Do You as a missionary? </h1>
          <div class="mt-5 md:text-4xl sm:text-3xl lg:text-[60px] text-black font-semibold mb-10">
            <p class="" data-aos="fade-right">Monetize Your Mission with</p>
            <p class="mb-3 md:mb-10 lg:mt-10 lg:mb-10 lg:leading-normal md:mt-3 " data-aos="fade-right" data-aos-duration="1500">doitnow: Earn, Share, and Impact</p>
                {{-- missionary --}}
              <!-- Modal toggle -->
              <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block border rounded-lg text-[26px] lg:text-3xl px-8 py-1 lg:px-12 sm:px-10 sm:text-2xl md:text-3xl lg:py-3 bg-[#DD2120] text-white transition custom-btn inline-blocfont-semibold shadow-xl shadow-slate-300  duration-300 transform hover:scale-105 font-medium text-sm text-center" type="button">
                Get Started
              </button>

            <!-- Main modal -->
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow ">
                      <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                      <section class="rounded-3xl shadow-2xl">
                        <div class="p-8 text-center sm:p-12">
                          <p class="text-lg font-semibold uppercase tracking-widest text-red-600">
                            Missions Calling! 
                          </p>
                      
                          <h2 class="mt-6 text-3xl font-bold">Lets Have Fun and Earn Reward with doitnow!  </h2>
                      
                          <a
                            class="mt-8 inline-block w-full rounded-full bg-red-600 py-4 text-sm font-bold text-white shadow-xl transition custom-btn inline-blocfont-semibold  shadow-slate-300  duration-300 transform hover:scale-105"
                            href="/registrasi/mission"
                          >
                            Started doitnow
                          </a>
                        </div>
                      </section>
                  </div>
              </div>
          </div>
        
      </div>
      
      <div class="flex lg:justify-end">
        <img src="/img/bg5.png" class="z-[-30px] lg:mt-[30px] lg:mr-96 lg:w-[200px] w-16 mt-[8px] ml-[-30px] sm:mt-20 sm:ml-20 " alt="">
      </div>
    </section>
  </div>
  {{-- end content 5 missionary --}}

  {{-- content 6 carousel --}}
<section class=" lg:mx-20 mx-5 sm:ml-10 sm:mt-[-20px] lg:mt-0 md:ml-20 mt-3 justify-center items-center block ">
  <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 lg:gap-8">
    <div class="lg:h-72 h-32 rounded-lg bg-[#DD2120] lg:col-span-2 text-black">
      <h1 class="lg:text-[52px] lg:font-semibold font-bold lg:mx-28 m-2">Unlock Rewards, Accomplish </h1>
      <p class="lg:text-[52px] lg:font-semibold lg:mx-28 font-bold mx-2">Missions.</p>
      <p class=" justify-end flex mr-5 lg:text-4xl font-bold text-white m-2 lg:mt-[-10px] ">doitnow</p>
    </div>
    <div class="lg:h-72 h-32 mt-[-10px] sm:ml-12  ">
      <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative lg:h-66 h-64 overflow-hidden rounded-lg md:h-96 ">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property1.png" class="lg:mx-24 w-32 lg:w-[260px] mx-6" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/Property2.png" class="lg:mx-24 w-32 lg:w-[260px] mx-6" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="/img/Property3.png" class="lg:mx-24 w-32 lg:w-[260px] mx-6 " alt="">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="/img/Property1.png" class=" lg:mx-24 w-32 lg:w-[260px] mx-6 " alt="">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="/img/Property2.png" class=" lg:mx-24 w-32 lg:w-[260px] mx-6 " alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- end content 6 carousel --}}

{{-- blog --}}
<section class="mt-16">
<h1 class="text-center text-4xl font-bold mb-10 text-black">doitnow Recent Updates</h1>
<div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-8 mx-10">
  @foreach ($blog as $blog)
  <div class="">
    <div class="max-w-sm  border rounded-lg shadow-lg relative cursor-pointer transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
      <a href="#">
          <img class="rounded-t-lg" src="{{ asset('/storage/' . $blog->image) }}" alt="" />
      </a>
      <div class="p-5">      
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $blog->created_date }}</p>
          <a href="{{ route('blog.show', $blog->slug) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-red-700 hover:underline hover:decoration-red-700">{{ $blog->title }}</h5>
          </a>
          <a href="{{ route('blog.show', $blog->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">
              Read more
               <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
      </div>
  </div>
  </div>
  @endforeach
</div>
<div class="flex justify-center items-center mt-10 lg:mt-20">
  <a href="/blog" class="text-xl hover:text-gray-400 hover:underline hover:decoration-gray-400">See more ...</a>
</div>
</section>
{{--  end blog --}}

{{-- content card --}}
<section class="lg:mb-5 lg:mt-[100px] mt-16 ">
<h1 class=" text-5xl lg:text-[76px] py-6 font-bold text-center mb-6 bg-clip-text text-transparent bg-gradient-to-r from-[#FF0000] to-[#010101]">Why users love doitnow?</h1>
<div class="flex justify-center">
    <div class="w-3/10 flex items-center">
        <div class="w-full text-right">
            <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
            </button>
        </div>
    </div>
    <div id="sliderContainer" class="w-full overflow-hidden">
        <ul id="slider" class="flex w-full duration-700 text-black">
          @foreach ($feedbacks as $feedback)
          <li class="p-3">
              <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full">
                  <p>{{ $feedback->comment }}</p>
                  
                  <div class="flex items-center space-x-4">
                      <img
                          alt=""
                          src="{{ asset($feedback->photo) }}"
                          class="size-14 rounded-full object-cover"
                      />
                      <div>
                          <p class="text-lg font-bold mt-9">{{ $feedback->name }}</p>
                          <p class="text-[#909B99]">{{ $feedback->position }}</p>
                          
                          {{-- Display stars based on rating --}}
                          <div class="flex items-center lg:ml-[200px] ml-18 mt-[-10px] mb-8 space-x-1">
                              @for ($i = 1; $i <= 5; $i++)
                                  @if ($i <= $feedback->rating)
                                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                                  @else
                                      <span class="text-gray-300 lg:text-4xl text-2xl">&#9733;</span>
                                  @endif
                              @endfor
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          @endforeach
          <li class="p-3 ">
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                <p>
                  "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                </p>
                
                <div class="flex items-center space-x-4 ">
                  <img
                    alt=""
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="size-14 rounded-full object-cover"
                  />
                  <div>
                    <p class="text-lg font-bold mt-9">Paul Starr</p>
                    <p class="text-[#909B99]">Missionary</p>
                    <div class="flex items-center lg:ml-[200px] ml-18 mt-[-10px] mb-8 space-x-1">
                      <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                    </div>
                  </div>
                </div>
            </div>
          </li>   
          <li class="p-3 ">
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                <p>
                  "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                </p>
                
                <div class="flex items-center space-x-4 ">
                  <img
                    alt=""
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="size-14 rounded-full object-cover"
                  />
                  <div>
                    <p class="text-lg font-bold mt-9">Paul Starr</p>
                    <p class="text-[#909B99]">Missionary</p>
                    <div class="flex items-center lg:ml-[200px] ml-18 mt-[-10px] mb-8 space-x-1">
                      <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                    </div>
                  </div>
                </div>
            </div>
          </li>   
          <li class="p-3 ">
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                <p>
                  "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                </p>
                
                <div class="flex items-center space-x-4 ">
                  <img
                    alt=""
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="size-14 rounded-full object-cover"
                  />
                  <div>
                    <p class="text-lg font-bold mt-9">Paul Starr</p>
                    <p class="text-[#909B99]">Missionary</p>
                    <div class="flex items-center lg:ml-[200px] ml-18 mt-[-10px] mb-8 space-x-1">
                      <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                    </div>
                  </div>
                </div>
            </div>
          </li>   
          <li class="p-3 ">
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-3 h-full w-full   ">
                <p>
                  "Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna sit sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl."
                </p>
                
                <div class="flex items-center space-x-4 ">
                  <img
                    alt=""
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="size-14 rounded-full object-cover"
                  />
                  <div>
                    <p class="text-lg font-bold mt-9">Paul Starr</p>
                    <p class="text-[#909B99]">Missionary</p>
                    <div class="flex items-center lg:ml-[200px] ml-18 mt-[-10px] mb-8 space-x-1">
                      <span class="text-yellow-400 lg:text-4xl text-2xl ">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                      <span class="text-yellow-400 lg:text-4xl text-2xl">&#9733;</span>
                    </div>
                  </div>
                </div>
            </div>
          </li>   
         
        </ul>
    </div>
    <div class="w-3/10 flex items-center">
        <div class="w-full">
            <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </button>
        </div>
    </div>
</div>
</section>
{{-- end content card --}}

{{-- Feed back --}}
<section class="flex justify-end mr-24">
  <!-- Modal toggle -->
  <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-24" type="button">
    Add Feedback
  </button>

  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow ">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                  <button type="button" class="text-gray-500 bg-transparent hover:bg-gray-500 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="default-modal">
                      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <h2 class="text-2xl font-bold mb-6 mt-8 text-center text-gray-800">Form Feedback </h2>
              <div class="w-full bg-white p-8 rounded-lg shadow-lg flex justify-center ">  
                <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 w-full">
                  @csrf
                  <!-- Input Nama -->
                  <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Your Name ..."
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm"
                    />
                  </div>
              
                  <!-- Pilihan Position -->
                  <div>
                    <label for="profession" class="block text-sm font-medium text-gray-700">Position</label>
                    <select
                      id="profession"
                      name="position"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-indigo-500 sm:text-sm"
                    >
                      <option value="">Please choose your position</option>
                      <option value="Company">Company</option>
                      <option value="Missionary">Missionary</option>
                    </select>
                  </div>

                  <!-- Input fEEDBACK-->
                  <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700">Your Feedback </label>
                    <textarea
                      id="comment"
                      name="comment"
                      rows="4"
                      placeholder="Write your feedback here..."
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    ></textarea>
                  </div>
              
                  
              
                  <!-- Upload Foto -->
                  <div>
                    <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                    <input
                      type="file"
                      id="photo"
                      name="photo"
                      accept="image/*"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                      onchange="previewImage(event)"
                    />
                    <img id="photo-preview" class="mt-4 w-20 h-20 rounded-full object-cover" style="display: none;" />
                  </div>
              
                  <!-- Penilaian Bintang -->
                  <div class="flex items-center justify-center mt-4 space-x-2 cursor-pointer ">
                    <input type="hidden" id="rating" name="rating" value="">
                    <!-- Bintang penilaian interaktif -->
                    <span class="star text-yellow-400 text-4xl hover:text-yellow-600" data-value="1">&#9733;</span>
                    <span class="star text-yellow-400 text-4xl hover:text-yellow-600 " data-value="2">&#9733;</span>
                    <span class="star text-yellow-400 text-4xl hover:text-yellow-600" data-value="3">&#9733;</span>
                    <span class="star text-yellow-400 text-4xl hover:text-yellow-600" data-value="4">&#9733;</span>
                    <span class="star text-yellow-400 text-4xl hover:text-yellow-600" data-value="5">&#9733;</span>
                  </div>
              
                  <!-- Tombol Submit -->
                  <div class="mt-6">
                    <button
                      type="submit"
                      class="w-full py-2 px-4 bg-red-600 text-white rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >
                      Submit
                    </button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</section>
{{-- end feedback --}}


{{-- banner akhir --}}
<div class="relative w-full h-screen lg:mt-10 mt-10 ">
 
<div class="absolute top-0 right-0 lg:w-40 lg:h-40 w-20 h-20 lg:mt-[-60px] mt-[-200px] rounded-full bg-white animate-lingkaran animate-bullet-top">
  <div class="flex lg:mt-20 lg:ml-[-90px] ml-[-60px] lg:w-14 lg:h-14 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top">
    <div class="flex lg:mt-[-60px] lg:ml-[-70px] lg:w-10 lg:h-10 w-11 h-11 rounded-full bg-white animate-lingkaran animate-bullet-top"></div>
  </div>
</div>
<div class="absolute top-0 right-0 lg:ml-[1100px] lg:w-48 lg:h-48 w-44 h-44 rounded-full mt-[480px]  sm:mb-96 md:mb-[600px] lg:mb-16 bg-white animate-bullet-bottom animate-lingkaran"></div>
<div class="grid grid-cols-1 gap-1 lg:grid-cols-3 lg:gap-8 lg:pt-56 mt-64 ">
  <div class="">
    <div class="relative">
      <img src="../img/Polygon 1.png" class="lg:mt-[-200px] mt-[-180px] lg:w-[600px] w-72 absolute top-0 left-0 z-10 animate-slide-in  " alt="">
      <img src="../img/Social media marketing and online advertising.png" alt="Gambar 2" class="absolute top-0 left-0 lg:ml-56 ml-24 mt-[-160px] z-10 animate-slide-in lg:w-[500px] w-72">
    </div>
  </div>
  <div class=" mr-64 w-full text-center lg:col-span-2 mt-96">
    <h1 class="lg:text-[63px] text-5xl text-centertext-3xl lg:mt-[-500px] mt-[-200px] lg:pt-20 lg:h-44 font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#FF0000] to-[#010101]">Sign up and </h1>
    <h1 class="lg:text-[63px] text-5xl text-centertext-3xl lg:mt-[-20px]  lg:h-44 h-48 font-bold bg-clip-text text-transparent bg-gradient-to-r mb-[-90px]  from-[#FF0000] to-[#010101] lg:mb-[-60px] ">get the prize </h1>
    <a class="inline-block rounded-full shadow-slate-500 shadow-xl bg-black px-8 py-3 text-[20px] font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-black" href="/registrasi/mission">Sign Up Now !
    </a>
  </div>
</div>
</div>
{{-- end banner akhir --}}

{{-- script --}}
<script>
  // card slide
let sliderContainer = document.getElementById('sliderContainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementsToShow = 2;

if (document.body.clientWidth < 1000) {
    elementsToShow = 1;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + 'px';
slider.style.transition = 'margin';
slider.style.transitionDuration = '1s';


for (let index = 0; index < cards.length; index++) {
    const element = cards[index];
    element.style.width = cardWidth + 'px';
}

function prev() {
    if (+slider.style.marginLeft.slice(0, -2) != -cardWidth * (cards.length - elementsToShow))
        slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
}

function next() {
    if (+slider.style.marginLeft.slice(0, -2) != 0)
        slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
}

// count
document.addEventListener('DOMContentLoaded', () => {
  const counters = [
      { id: 'counter1', end: 120 }, // Adjust the end value as needed
      { id: 'counter2', end: 100 }, // Adjust the end value as needed
      { id: 'counter3', end: 300 }   // Adjust the end value as needed
  ];

  const animateCount = (element, start, end, duration) => {
      let current = start;
      const increment = end > start ? 1 : -1;
      const stepTime = Math.abs(Math.floor(duration / (end - start)));
      
      const timer = setInterval(() => {
          current += increment;
          element.textContent = current;
          if (current === end) {
              clearInterval(timer);
          }
      }, stepTime);
  };

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              counters.forEach(counter => {
                  const element = document.getElementById(counter.id);
                  if (!element.classList.contains('counted')) {
                      animateCount(element, 0, counter.end, 2000); // Animate over 2 seconds
                      element.classList.add('counted'); // Add class to ensure it only animates once
                  }
              });
              observer.disconnect(); // Stop observing once animation is triggered
          }
      });
  }, {
      threshold: 0.5 // Adjust this threshold as needed
  });

  counters.forEach(counter => {
      const element = document.getElementById(counter.id);
      observer.observe(element);
  });
});


 // Fungsi untuk pratinjau gambar
 function previewImage(event) {
      const reader = new FileReader();
      const photoPreview = document.getElementById('photo-preview');

      reader.onload = function() {
        if (reader.readyState === 2) {
          photoPreview.src = reader.result;
          photoPreview.style.display = 'block';
        }
      }
      reader.readAsDataURL(event.target.files[0]);
    }

    // Fungsi untuk interaktivitas bintang
    document.addEventListener('DOMContentLoaded', () => {
      const stars = document.querySelectorAll('.star');
      stars.forEach(star => {
        star.addEventListener('click', () => {
          const value = star.getAttribute('data-value');
          document.getElementById('rating').value = value;
          // Reset warna bintang
          stars.forEach(s => {
            if (s.getAttribute('data-value') <= value) {
              s.classList.add('text-yellow-400');
              s.classList.remove('text-gray-300');
            } else {
              s.classList.add('text-gray-300');
              s.classList.remove('text-yellow-400');
            }
          });
        });
      });
    });

</script>

</section>

@endsection