@extends('layouts.mainblog')

@section('container')
<section class="pt-32 px-14 bg-white">
  <div class="container-fluid">
    <div class="flex justify-end items-end mt-5">
      <img src="/img/logo.png" alt="">
    </div>
    <h1 class="ml-3 text-4xl font-semibold text-black">What's News?</h1>

    <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-10 mt-8">
      <!-- Sidebar -->
      <div class="h-[600px] order-2 lg:order-1 overflow-y-auto lg:col-span-1">
        @foreach ($blogs as $blog)
        <div class="grid grid-cols-2 gap-4 mx-2 pt-6 border-b-2 shadow-lg">
          <div>
            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class=" w-72 h-32  ">
          </div>
          <div>
            <a href="{{ route('blog.show', $blog->slug) }}" class="hover:text-red-700 hover:underline hover:decoration-red-800 text-black">
              <h1 class="font-medium text-[11px] lg:text-[15px]">{{ $blog->title }}</h1>
            </a>
            <p class="pt-2 pb-3 text-black">{{ $blog->created_date }}</p>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Main -->
      <div class="lg:col-span-2 order-1 lg:order-2">
        <img src="/img/blog.png" alt="">
        <a href="{{ route('blog.show', $blog->slug) }}" class="hover:text-red-700 hover:underline hover:decoration-red-800 text-black">
          <h1 class="text-4xl font-bold pt-5 text-black">{{ $newest->title }}</h1>
        </a>
      </div>
    </div>

    {{-- Main Bottom --}}

    <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-8 mx-10 mt-28">
      @foreach ($blog3 as $blog)
      <div class="">
        <div class="max-w-sm  border rounded-lg shadow-lg relative cursor-pointer transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('/storage/' . $blog->image) }}" alt="" />
          </a>
          <div class="p-5">      
              <p class="mb-3 font-normal text-black">{{ $blog->created_date }}</p>
              <a href="{{ route('blog.show', $blog->slug) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black hover:text-red-700 hover:underline hover:decoration-red-700">{{ $blog->title }}</h5>
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
  </div>
</section>
@endsection