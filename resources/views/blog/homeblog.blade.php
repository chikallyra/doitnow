@extends('layouts.mainblog')

@section('container')
<section class="pt-32 px-14">
  <div class="container-fluid ">
    <div class="flex justify-end items-end mt-5">
      <img src="/img/logo.png" alt="">
    </div>
    <h1 class=" ml-3 text-4xl font-semibold ">Whats News? </h1>
    <div class="grid grid-cols-1 gap-0 lg:grid-cols-3 lg:gap-10 mt-8">
      
      <div class="h-[600px]  order-2 lg:order-none overflow-y-auto">
       
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-4 mx-2 pt-6 border-b-2 shadow-lg ">
          <div class=" ">
            <img src="/img/blog.png" alt="">
          </div>
          <div class=" ">
            <a href="" class="hover:text-blue-700 hover:underline hover:decoration-blue-800"><h1 class="font-medium  text-[11px] lg:text-[15px]">doitnow! The ultimate online mission platform that makes earning rewards a blast!</h1></a>
            <p class="pt-2 pb-3">5 minute ago</p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-4 mx-2 pt-6 border-b-2 shadow-lg ">
          <div class=" ">
            <img src="/img/blog.png" alt="">
          </div>
          <div class=" ">
            <a href="" class="hover:text-blue-700 hover:underline hover:decoration-blue-800"><h1 class="font-medium  text-[11px] lg:text-[15px]">doitnow! The ultimate online mission platform that makes earning rewards a blast!</h1></a>
            <p class="pt-2 pb-3">5 minute ago</p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-4 mx-2 pt-6 border-b-2 shadow-lg ">
          <div class=" ">
            <img src="/img/blog.png" alt="">
          </div>
          <div class=" ">
            <a href="" class="hover:text-blue-700 hover:underline hover:decoration-blue-800"><h1 class="font-medium  text-[11px] lg:text-[15px]">doitnow! The ultimate online mission platform that makes earning rewards a blast!</h1></a>
            <p class="pt-2 pb-3">5 minute ago</p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-4 mx-2 pt-6 border-b-2 shadow-lg ">
          <div class=" ">
            <img src="/img/blog.png" alt="">
          </div>
          <div class=" ">
            <a href="" class="hover:text-blue-700 hover:underline hover:decoration-blue-800"><h1 class="font-medium  text-[11px] lg:text-[15px]">doitnow! The ultimate online mission platform that makes earning rewards a blast!</h1></a>
            <p class="pt-2 pb-3">5 minute ago</p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-2 lg:gap-4 mx-2 pt-6 border-b-2 shadow-lg ">
          <div class=" ">
            <img src="/img/blog.png" alt="">
          </div>
          <div class=" ">
            <a href="" class="hover:text-blue-700 hover:underline hover:decoration-blue-800"><h1 class="font-medium  text-[11px] lg:text-[15px]">doitnow! The ultimate online mission platform that makes earning rewards a blast!</h1></a>
            <p class="pt-2 pb-3">5 minute ago</p>
          </div>
        </div>
        
       
      </div>
      <div class="h-96 w-full lg:col-span-2 order-1 lg:order-none">
        <img src="/img/blog.png" alt="">
        <a href="" class="hover:text-blue-700 hover:underline hover:decoration-blue-800"><h1 class="text-4xl font-bold pt-5">doitnow! The ultimate online mission platform that makes earning rewards a blast!</h1></a>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-8 mx-10 mt-28">
      <div class="h-52 rounded-lg bg-gray-200">
        
        <figure class="relative cursor-pointer transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
          <a href="/blog">
            <img class="rounded-lg" src="/img/blog.png" alt="news">
          </a>
          <figcaption class="absolute text-lg  bottom-0 ">
              <p class="bg-white w-44 px-10 text-base ">May 20, 2024</p>
              <p class="bg-[#FF0000] rounded-b-lg px-10  ">doitnow! The ultimate online mission platform that makes earning rewards a blast!</p>
          </figcaption>
        </figure>
  
      </div>
      <div class="h-52 rounded-lg bg-gray-200">
        
        <figure class="relative cursor-pointer transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
          <a href="/blog">
            <img class="rounded-lg" src="/img/blog.png" alt="news">
          </a>
          <figcaption class="absolute text-lg  bottom-0 ">
              <p class="bg-white w-44 px-10 text-base ">May 20, 2024</p>
              <p class="bg-[#FF0000] rounded-b-lg px-10  ">doitnow! The ultimate online mission platform that makes earning rewards a blast!</p>
          </figcaption>
        </figure>
  
      </div>
      <div class="h-52 rounded-lg bg-gray-200">
        
        <figure class="relative cursor-pointer transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
          <a href="/blog">
            <img class="rounded-lg" src="/img/blog.png" alt="news">
          </a>
          <figcaption class="absolute text-lg  bottom-0 ">
              <p class="bg-white w-44 px-10 text-base ">May 20, 2024</p>
              <p class="bg-[#FF0000] rounded-b-lg px-10  ">doitnow! The ultimate online mission platform that makes earning rewards a blast!</p>
          </figcaption>
        </figure>
  
      </div>
      
    </div>
    
  </div>
</section>
@endsection

