@extends('platform.layouts.main_p')
<section >
    {{-- navbar --}}
    <div class="flex justify-between lg:mx-24 mx-10 pt-5 ">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <h1 class="text-black text-3xl font-bold">Descriptions</h1>
        <ul class="flex">
            <li>
                <i class="fas fa-code-branch mx-3 text-black font-bold text-3xl"></i>
            </li>
            <li>
                <svg class="w-8 h-8 text-black font-semibold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z"/>
                  </svg>                  
            </li>      
        </ul>
    </div>
    <div class="border-b-3 border mt-2 border-gray-200"></div>
    {{-- end navbar --}}

    {{-- gambar --}}
    <div class="flex justify-center items-center pt-24">
        <img src="{{ asset('storage/' . $mission->image) }}" class="w-64 " alt="">
    </div>
    {{--end  gambar --}}

    {{-- ket --}}
    <div class="mx-10 lg:mx-32 border p-3 rounded-lg mt-10 pb-10">
        <h1 class=" uppercase bg-red-600 font-semibold py-1 px-3 rounded-lg text-center tracking-wider max-w-fit text-white">social</h1>
        <h5 class="mt-3 text-3xl text-black font-bold ">{{ $mission->title}}</h5>
        <p class="mt-2 font-semibold text-gray-500">by {{ $mission->company->name }}</p>
        <p class="text-lg  text-slate-800 font-medium mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus nulla delectus dicta non nihil dolorum eum suscipit id cum odit!</p>
        <div class="flex justify-between mt-3">
            @if (!@empty($mission->link))
            <input type="text" id="myInput" value="{{ $mission->link }}" class="w-full bg-gray-200 px-2 text-lg py-1 rounded-xl border-2 mr-5 border-gray-400">
            <button onclick="copyText()"><i class="far fa-copy text-3xl text-gray-700"></i></button>
            @endif
        </div>
    </div>
    {{-- end ket --}}

    

    {{-- Steps --}}
<div class="mx-10 lg:mx-32 mt-10 pb-10">
    <h1 class="mb-3 font-bold text-3xl text-black">Steps</h1>
    <div class="border p-3 rounded-lg">
        @foreach($mission->steps as $index => $step)
        <!-- Checkbox -->
        <div class="m-4 flex items-center " onclick="showPopup({{ $index }})">
            <input type="checkbox" id="togglePopup-{{ $index + 1 }}" class="form-checkbox h-5 w-5 text-blue-600 bg-white border-gray-400">
            <label for="togglePopup-{{ $index + 1 }}" class="ml-2 text-black font-normal">{{ $step['description'] }}</label>
        </div>

        <!-- Pop-up -->
        <!-- Pop-up -->
<div class="flex justify-center items-center">
    <div id="popup-{{ $index }}" class="flex justify-center items-center hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50">
        <div class="bg-white p-8 rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Input Form</h2>
            <form id="popupForm">
                @if($step['type'] === 'file')
                <div class="mb-6">
                    <label for="file-input" class="block mb-2 text-sm font-medium text-gray-900">Upload File</label>
                    <input type="file" id="file-input" name="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                @else
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Default input</label>
                    <input type="text" id="default-input" name="default" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                @endif
            </form>
            <button id="closePopup" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" onclick="closePopup({{ $index }})">Close</button>
        </div>
    </div>
</div>
        @endforeach
    </div>
    <div class="mt-8">
        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class=" block bg-red-700 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-red-800 " >Take a mission</button>

        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow ">
                    <button  class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Are you sure you want to take on this mission? Your deadline is until <span class="text-red-500">November 12, 2024.</span></h3>
                        <button data-modal-hide="popup-modal"  class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- End Steps --}}
</section>

@section('script')
<script>
    // Fungsi untuk menampilkan popup
    function showPopup(index) {
        var popup = document.getElementById('popup-' + index);
        popup.classList.remove('hidden');
    }

    // Fungsi untuk menyembunyikan popup
    function closePopup(index) {
        var popup = document.getElementById('popup-' + index);
        popup.classList.add('hidden');
    }

    // Fungsi untuk menyalakan event listener pada tombol close
    document.addEventListener('DOMContentLoaded', function () {
        var closeButtons = document.querySelectorAll('[id^="closePopup"]');
        closeButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var index = button.id.split('-')[1];
                closePopup(index);
            });
        });
    });
</script>
s
@endsection