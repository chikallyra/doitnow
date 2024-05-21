@extends('layouts.mainlogin')

@section('container')

<div id="controls-carousel" class="relative h-screen overflow-hidden" data-carousel="static">
    <!-- Carousel Wrapper -->
    <div class="relative h-full overflow-hidden rounded-lg   ">
      <div class="hidden transition duration-1000 ease-in-out" data-carousel-item>
        <div class="h-full flex items-center justify-center bg-red-100 ">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <div class="container flex justify-center items-center">
                        <img src="/img/welcome1.png" class="" alt="selamat datang">
                    </div>
                    <h1 class="mb-4 text-3xl mt-4 font-extrabold tracking-widest leading-none text-gray-900 md:text-4xl lg:text-5xl ">Selamat Datang</h1>
                    <p class="mb-8 text-lg font-bold pt-8 lg:text-3xl tracking-wide sm:px-16 lg:px-48 text-slate-800">Hi , {{ auth('web')->user()->name }}</p>
                    <p class="mb-8 text-lg font-medium lg:text-2xl sm:px-16 lg:px-48 dark:text-gray-400">Selamat kamu telah menjadi missionary #{{ auth('web')->user()->id }} di <span class="font-extrabold text-[#FF0000] text-3xl">doitnow</span></p>        
                </div>
        </div>
      </div>
      <div class="hidden transition duration-1000 ease-in-out " data-carousel-item>
        <div class="h-full flex items-center justify-center bg-red-100">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <div class="container flex justify-center items-center">
                    <img src="/img/welcome2.png" class="" alt="selamat datang">
                </div>
                <h1 class="mb-4 text-3xl mt-4 font-extrabold tracking-widest leading-none text-gray-900 md:text-4xl lg:text-5xl">Ada Pertanyaan ?</h1>
                <p class="mt-8 text-lg font-semibold lg:text-2xl sm:px-16 lg:px-48 dark:text-gray-400"> Hei, kami di sini untuk membantu!</p>        
                <p class="mb-8 text-lg font-semibold lg:text-2xl sm:px-16 lg:px-48 dark:text-gray-400">Jika Anda memiliki pertanyaan atau butuh bantuan, beri tahu kami. Kami akan segera menghubungi Anda kembali.</p>        
                <div class="flex flex-col space-x-2 space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#" class="inline-flex justify-center items-center py-2 px-5 text-base font-medium text-center text-black rounded-full bg-transparent border-2 hover:border-red-300 border-black hover:bg-red-300 focus:ring-4 focus:ring-red-300 ">
                        Whatsapp
                        <svg class="w-6 h-6 text-black ml-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                            <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                          </svg>                          
                    </a>
                    <a href="#" class="inline-flex justify-center items-center py-2 px-8 text-base font-medium text-center text-black rounded-full bg-transparent border-2 hover:border-red-300 border-black hover:bg-red-300 focus:ring-4 focus:ring-red-300 ">
                        Email
                        <svg class="w-6 h-6  text-black ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                            <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                          </svg>                                     
                    </a>
                </div>
            </div>   
        </div>
      </div>
      <div class="hidden transition duration-1000 ease-in-out " data-carousel-item>
        <div class="h-full flex items-center justify-center  bg-red-100">
            <div class=" px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <div class="container flex justify-center items-center">
                    <img src="/img/welcome3.png" class="" alt="selamat datang">
                </div>
                <div class="container flex justify-center items-center mt-10 mb-4">
                    <img src="/img/logo.png" class="" alt="selamat datang">
                </div>
                <h1 class="mb-4 text-3xl mt-4 font-bold tracking-normal lg:mb-10 leading-none text-gray-900 md:text-4xl lg:text-5xl ">Senang bekerja sama dengan anda</h1>  
                
                <div class="flex flex-col space-x-2 space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <button class="inline-flex justify-center items-center py-2 lg:px-14 text-lg font-medium text-center mt-5 text-white rounded-full bg-red-400 border-2 shadow-xl shadow-slate-600 hover:bg-black focus:ring-4 focus:ring-red-300 ">
                        Logout                       
                    </button>
                </form>
                </div>   
            </div>
        </div>
      </div>
    </div>
  
    <!-- Indicators -->
  <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-3 z-30">
    <button type="button" class="w-5 h-5 rounded-full bg-red-500" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
    <button type="button" class="w-5 h-5 rounded-full bg-red-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    <button type="button" class="w-5 h-5 rounded-full bg-red-500" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
  </div>
</div>
@endsection