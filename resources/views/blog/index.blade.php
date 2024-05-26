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
            <h1 class="text-center lg:text-5xl text-xl font-semibold text-red-600 tracking-wider ">The ultimate online mission platform</h1>
            <h1 class="text-center lg:text-5xl text-xl font-semibold text-red-600 tracking-wider ">that makes earing rewards a blast!</h1>
        </div>
        <div class="mt-3 lg:mt-8">
            <h1 class="font-semibold lg:text-2xl">The ultimate online mission platform that makes earning rewards a blast!</h1>
            <p class="mt-3">Find your exciting adventure while completting mission, and getting atractive reward!</p>
            <p class=" font-extrabold">__________</p>
            <p class="mt-3">What You Can Get from doitnow?</p>
            <ul class=" list-disc">
                <h1>For Businesses (Mission Creators):</h1>
                <li class="ml-4">Achieve Marketing Goals: Get help from the community to complete missions such as app downloads, account registrations, KYC listings, trending topics, increasing followers, likes, views, polls, and comments, and much more.</li>
                <li class="ml-4">Save Marketing Costs: Leverage the power of the community to achieve your marketing goals at a lower cost than traditional marketing methods.</li>
                <li class="ml-4">Gain Valuable Insights: Get valuable feedback and insights from the community to improve your marketing strategies.</li>
                <li class="ml-4">Expand Business Reach: Reach a wider target audience and build brand awareness with the help of an active community.</li>
            </ul>
            <ul class=" list-disc mt-5">
                <h1>For Mission Completers:</h1>
                <li class="ml-4">Earn Exciting Rewards: Get exciting rewards for completing missions.</li>
                <li class="ml-4">Work from Anywhere: Complete missions anytime, anywhere you want using your device.</li>
                <li class="ml-4">Be Part of an Active Community: Join an enthusiastic and supportive community and get exciting networking opportunities</li>
                <li class="ml-4"> Earn Extra Income: Earn extra income by completing missions and inviting friends to join doitnow.</li>
            </ul>

            <h1 class="mt-5 font-medium">May 20, 2024</h1>

            <div class="mt-16">
                <h1 class="font-semibold text-xl lg:text-2xl">Related Artcle</h1>
                <div class="flex justify-end items-end">
                    <a href="" class="px-8 border-2 bg-red-600 rounded-lg text-white hover:bg-red-800">Read More</a>
                </div>

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-8  mt-3">
                    <div class="h-52 ">
                      
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
        </div>
        
          
    </div>
</section>
    
@endsection