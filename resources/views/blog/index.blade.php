@extends('layouts.mainblog')

@section('container')

<section class="pt-32">
    <div class="container-fluid mx-10 ">
        <div class="flex justify-end items-end">
            <img src="/img/logo.png" class="w-32 lg:w-72" alt="">
        </div>
        <div class="flex justify-center items-center mt-8">
            <img src="/img/blog.png" alt="blog">   
        </div>
        <div class="mt-8 lg:mx-24">
            <h1 class="text-center lg:text-5xl text-xl font-semibold text-red-600 tracking-wider ">{{ $blog->title }}</h1>
        </div>
        <div class="mt-3 lg:mt-8">
            <p class="mt-3">{!! $blog->body !!}</p>

            <h1 class="mt-5 font-medium">{{ $blog->created_date }}</h1>

            <div class="mt-16">
                <h1 class="font-semibold text-xl lg:text-2xl">Related Artcle</h1>
                <div class="flex justify-end items-end">
                    <a href="/blog" class="px-8 border-2 bg-red-600 rounded-lg text-white hover:bg-red-800">Read More</a>
                </div>

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-8 mx-10 mt-28">
                  @foreach ($blog3 as $blog)
                  <div class="">
                    <div class="max-w-sm  border rounded-lg shadow-lg relative cursor-pointer transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                      <a href="#">
                          <img class="rounded-t-lg" src="{{ asset('/storage/' . $blog->image) }}" alt="" />
                      </a>
                      <div class="p-5">      
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $blog->created_date }}</p>
                          <a href="{{ route('blog.show', $blog->slug) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-blue-700 hover:underline hover:decoration-blue-700">{{ $blog->title }}</h5>
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
        </div>
        
          
    </div>
</section>
    
@endsection