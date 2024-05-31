@extends('dashboardcompany.layouts.main')
@section('container')
<section class=" pt-64 " >
    <form action="">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-[120px_1fr] lg:gap-8 mx-8 ">
            <a href="">
                <div class="h-32 rounded-lg bg-white border-4 border-gray-300 hover:bg-gray-200">
                    <div class="flex justify-center items-center">
                        <img src="/img/add.png" class="mt-4 rounded-full border-2 border-gray-300 p-1" alt="">
                    </div>
                    <h1 class="text-center mt-2 text-black">Create Mission</h1>
                </div>
            </a>
            <div class="h-full rounded-lg bg-white border-4 border-gray-300">
                <h1 class="ml-10 mt-5 text-3xl uppercase tracking-wider font-semibold text-black mb-5">create mission</h1>
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-[120px_1fr] lg:gap-8 mx-10 mb-8">
                    <div class=" mt-8">
                        <form class=""> 
                            <div class="image-upload-wrapper @apply relative w-32 h-32 border-2 border-dashed border-gray-300 flex items-center justify-center rounded-lg ">
                            <img src="/path/to/your/image-placeholder.jpeg" alt="Edit Picture" class="image-upload-placeholder @apply absolute w-12 h-12" />
                            <input type="file" accept="image/*" class="@apply absolute w-full h-full opacity-0 cursor-pointer" />
                            </div>
                            <h2 class="mt-3 text-center text-lg font-medium text-red-500">Edit Picture</h2>
                        </form>
                    </div>
                    <div class="">
                        <div class="mb-4">
                            <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Name</label>
                            <input type="text" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 " placeholder="Name of mission" required />
                        </div>
                            
                            <h1 class="mb-2 text-lg font-medium text-black ml-1">Category</h1>
                            <fieldset class="flex flex-wrap gap-3">
                                
                                <legend class="sr-only text-black"></legend>
                            
                                <div>
                                <label
                                    for="ColorBlack"
                                    class="flex cursor-pointer items-center justify-center rounded-md border border-gray-300 bg-gray-300 px-3 py-2 text-gray-900 hover:border-gray-200 has-[:checked]:border-red-600 has-[:checked]:bg-red-600 has-[:checked]:text-white">
                                    <input
                                    type="radio"
                                    name="ColorOption"
                                    value="ColorBlack"
                                    id="ColorBlack"
                                    class="sr-only"
                                    checked/>                         
                                    <p class="text-sm font-medium uppercase tracking-widest">social</p>
                                </label>
                                </div>
                            
                                <div>
                                <label
                                    for="ColorRed"
                                    class="flex cursor-pointer items-center justify-center rounded-md border border-gray-300 bg-gray-300 px-3 py-2 text-gray-900 hover:border-gray-200 has-[:checked]:border-red-600 has-[:checked]:bg-red-600 has-[:checked]:text-white">
                                    <input type="radio" name="ColorOption" value="ColorRed" id="ColorRed" class="sr-only" />                      
                                    <p class="text-sm font-medium uppercase tracking-widest ">Survei</p>
                                </label>
                                </div>
                            
                                <div>
                                <label
                                    for="ColorBlue"
                                    class="flex cursor-pointer items-center justify-center rounded-md border border-gray-300 bg-gray-300 px-3 py-2 text-gray-900 hover:border-gray-200 has-[:checked]:border-red-600 has-[:checked]:bg-red-600 has-[:checked]:text-white">
                                    <input type="radio" name="ColorOption" value="ColorBlue" id="ColorBlue" class="sr-only" />                          
                                    <p class="text-sm font-medium uppercase tracking-widest ">Game</p>
                                </label>
                                </div>
                            </fieldset>
                    
                        <form class="mb-4 mt-4">
                            <label for="countries" class="mb-2 text-lg font-medium text-black ml-1 ">Type Mission</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 ">
                            <option selected>Choose a Type Mission</option>
                            <option value="D">Daily</option>
                            <option value="W">Weekyl</option>
                            <option value="M">Monthly</option>
                            </select>
                        </form>

                        <div class="mb-4">
                            <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Link <span class="text-sm text-gray-400">(optional)</span></label>
                            <input type="text" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 " placeholder=" https://gogogogoog.com" />
                        </div>
    
                        <div class="mb-4">                        
                            <label for="message" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Description</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-600 focus:border-red-600  placeholder="Write your thoughts here..."></textarea>
                        </div>
                        

                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-10 py-2.5 me-2 mb-5 mr-10 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Create Mission</button>
                </div>
        </div>
    </form>
</section>
    
    
@endsection