@extends('platform.layouts.main_p')
@section('container')
<section>
    {{-- navbar --}}
    <div class="fixed bg-white border-b-2 border-gray-300 w-full z-10 -mt-2 ">
        <div class="flex lg:mx-24 mx-10 py-5 items-center justify-between">
            <a href="/platform" class="flex-none">
                <i class="fas fa-arrow-left text-black font-bold text-3xl"></i>
            </a>
            <div class="flex-grow flex justify-center">
                <h1 class="text-black text-3xl font-bold text-center">Descriptions</h1>
            </div>
            <div class="flex-none" style="width: 24px;"></div> <!-- Placeholder div untuk menjaga space -->
        </div>
    </div>
    <div class="border-b-3 border mt-2 border-gray-200"></div>
    {{-- end navbar --}}

    {{-- gambar --}}
    <div class="flex justify-center items-center pt-24">
        <img src="{{ asset('storage/' . $mission->image) }}" class="w-64" alt="">
    </div>
    {{--end  gambar --}}

    {{-- ket --}}
    <div class="mx-10 lg:mx-32 border p-3 rounded-lg mt-10 pb-10">
        <h1 class="uppercase bg-red-600 font-semibold py-1 px-3 rounded-lg text-center tracking-wider max-w-fit text-white">{{ $mission->category->name }}</h1>
        <h5 class="mt-3 text-3xl text-black font-bold">{{ $mission->title }}</h5>
        <p class="mt-2 font-semibold text-gray-500">by {{ $mission->company->name }}</p>
        <p class="text-lg text-slate-800 font-medium mt-2">{!! $mission->description !!}</p>
        @if (!empty($mission->link))
        <div class="flex flex-col mt-3">
            <div class="flex justify-between">
                <input type="text" id="myInput" value="{{ $mission->link }}" class="w-full bg-gray-200 px-2 text-lg py-1 rounded-xl border-2 mr-5 border-gray-400">
                <button onclick="copyText()" class="flex-none">
                    <i class="far fa-copy text-3xl text-gray-700"></i>
                </button>
            </div>
            <!-- alert -->
            <span id="copyFeedback" class="text-green-500 mt-2 hidden">Text copied to clipboard!</span>
        </div>
        
        @endif
    </div>
    {{-- end ket --}}

    {{-- Steps --}}
    <div class="mx-10 lg:mx-32 mt-10 pb-10">
        <h1 class="mb-3 font-bold text-3xl text-black">Steps</h1>
        <div class="border p-3 rounded-lg">
            @foreach($mission->steps as $index => $step)
            <!-- Step Container -->
            <div class="step-container m-4 flex items-center {{ $index > 0 ? 'hidden' : '' }}" data-index="{{ $index }}">
                <input type="checkbox" id="togglePopup-{{ $index }}" class="form-checkbox h-5 w-5 text-reds-600 bg-white border-gray-400" disabled>
                <label for="togglePopup-{{ $index }}" class="ml-2 text-black font-normal cursor-pointer hover:underline hover:text-red-600">{{ $step['description'] }}</label>
            </div>

            <!-- Pop-up -->
            <div id="popup-{{ $index }}" class="flex justify-center items-center fixed top-0 left-0 w-full h-full hidden bg-black bg-opacity-50 z-50">
                <div class="bg-white  p-3 rounded-lg w-full lg:mx-20 mx-2">
                    <div class="flex justify-end items-start">
                        <button type="button" class="  text-white " onclick="closePopup({{ $index }})"><span><i class="far fa-times-circle text-red-600 hover:text-red-800 text-3xl"></i></span></button>
                    </div>
                    <div class="px-8 pb-8">
                        <h2 class="text-3xl font-bold text-black mb-4">Step mission</h2>
                        <form id="popupForm-{{ $index }}" class="popup-form">
                            @if($step['type'] === 'file')
                            <div class="mb-6">
                                <label for="file-input-{{ $index }}" class="block mb-2 text-sm font-medium text-gray-500">{{ $step['description'] }}</label>
                                <input type="file" id="file-input-{{ $index }}" name="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-reds-500 focus:border-reds-500 block w-full p-2.5">
                            </div>
                            @elseif($step['type'] === 'hidden')
                            <div class="mb-6">
                                <p class="text-sm font-medium text-gray-900">{{ $step['description'] }}</p>
                            </div>
                            @else
                            <div class="mb-3">
                                <label for="default-input-{{ $index }}" class="block mb-2 text-sm font-medium text-gray-500">{{ $step['description'] }}</label>
                                <input type="text" id="default-input-{{ $index }}" name="default" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-reds-500 focus:border-reds-500 block w-full p-2.5">
                            </div>
                            @endif
                            <button type="button" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-800" onclick="submitStep({{ $index }})">Submit</button>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-8">
            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block bg-red-700 text-white focus:ring-4 focus:outline-none focus:ring-reds-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-16 hover:bg-red-800">Take a mission</button>

            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you have completed all the steps in this mission?</h3>
                            <button data-modal-hide="popup-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ml-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-reds-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                No, cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Steps --}}
</section>
@endsection

@section('script')
<script>
    // Fungsi show popup
    function showPopup(index) {
        var popup = document.getElementById('popup-' + index);
        popup.classList.remove('hidden');
    }

    // Fungsi close popup
    function closePopup(index) {
        var popup = document.getElementById('popup-' + index);
        popup.classList.add('hidden');
    }

    // Fungsi enable step berikutnya ples checkbox
    function submitStep(index) {
        var form = document.getElementById('popupForm-' + index);
        var input = form.querySelector('input, select');

        // Validasi input jika step type bukan hidden
        if (input.type !== 'hidden' && !input.value) {
            alert('Please complete the input for this step.');
            return;
        }

        // Enable checkbox untuk step saat ini
        var checkbox = document.getElementById('togglePopup-' + index);
        checkbox.disabled = false;
        checkbox.checked = true;

        // Show next step
        var nextStep = document.querySelector('.step-container[data-index="' + (index + 1) + '"]');
        if (nextStep) {
            nextStep.classList.remove('hidden');
        }

        // Close the current popup
        closePopup(index);
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Attach click event to step containers to show the popup
        document.querySelectorAll('.step-container').forEach(function (container) {
            container.addEventListener('click', function () {
                var index = container.getAttribute('data-index');
                showPopup(index);
            });
        });
    });
</script>
@endsection
