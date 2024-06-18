@extends('platform.layouts.main_p')
@section('container')
<section class="h-full">
    {{-- Navbar --}}
    <!-- Your existing navbar code -->

    {{-- Gambar --}}
    <div class="flex justify-center items-center pt-24">
        <img src="{{ asset('storage/' . $mission->image) }}" class="w-64" alt="">
    </div>
    {{-- End Gambar --}}

    {{-- Keterangan --}}
    <div class="mx-10 lg:mx-32 border p-3 rounded-lg mt-10 pb-10">
        <h1 class="uppercase bg-red-600 font-semibold py-1 px-3 rounded-lg text-center tracking-wider max-w-fit text-white">{{ $mission->category->name }}</h1>
        <h5 class="mt-3 text-3xl text-black font-bold">{{ $mission->title }}</h5>
        <p class="mt-2 font-semibold text-gray-500">by {{ $mission->company->name }}</p>
        <p class="text-lg text-black font-medium mt-2">{!! $mission->description !!}</p>
        @if (!empty($mission->link))
        <div class="flex flex-col mt-3">
            <div class="flex justify-between">
                <input type="text" id="myInput" value="{{ $mission->link }}" class="w-full bg-gray-200 px-2 text-lg py-1 rounded-xl border-2 mr-5 border-gray-400">
                <button onclick="copyText()" class="flex-none">
                    <i class="far fa-copy text-3xl text-gray-700"></i>
                </button>
            </div>
            <!-- Alert -->
            <span id="copyFeedback" class="text-green-500 mt-2 hidden">Text copied to clipboard!</span>
        </div>
        @endif
    </div>
    {{-- End Keterangan --}}

    {{-- Steps --}}
    <div class="mx-10 lg:mx-32 mt-10 pb-10">
        <h1 class="mb-3 font-bold text-3xl text-black">Steps</h1>
        <div class="border p-3 rounded-lg">
            @foreach($mission->steps as $index => $step)
            <div class="step-container m-4 flex items-center" data-index="{{ $index }}">
                <span class="step-description cursor-pointer hover:text-red-600 hover:underline text-black font-normal">{{ $step['description'] }}</span>
                <input type="checkbox" id="togglePopup-{{ $index }}" class="form-checkbox h-5 w-5 text-red-600 bg-white border-gray-400 ml-2 hidden" onclick="showPopup({{ $index }})" disabled>
            </div>

            <div id="popup-{{ $index }}" class="flex justify-center items-center fixed top-0 left-0 w-full h-full hidden bg-black bg-opacity-50 z-50">
                <div class="bg-white p-3 rounded-lg w-full lg:mx-20 mx-2">
                    <div class="flex justify-end items-start">
                        <button type="button" class="text-white" onclick="closePopup({{ $index }})">
                            <i class="far fa-times-circle text-red-600 hover:text-red-800 text-3xl"></i>
                        </button>
                    </div>
                    <div class="px-8 pb-8">
                        <h2 class="text-3xl font-bold text-black mb-4">Step mission</h2>
                        <form id="popupForm-{{ $index }}" class="popup-form">
                            @if($step['type'] === 'file')
                            <div class="mb-6">
                                <label for="file-input-{{ $index }}" class="block mb-2 text-sm font-medium text-gray-500">{{ $step['description'] }}</label>
                                <input type="file" id="file-input-{{ $index }}" name="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                            </div>
                            @elseif($step['type'] === 'hidden')
                            <div class="mb-6">
                                <p class="text-sm font-medium text-gray-900">{{ $step['description'] }}</p>
                            </div>
                            @else
                            <div class="mb-3">
                                <label for="default-input-{{ $index }}" class="block mb-2 text-sm font-medium text-gray-500">{{ $step['description'] }}</label>
                                <input type="text" id="default-input-{{ $index }}" name="default" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
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
            @if ($isMissionCompleted)
                <button class="block bg-green-500 text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-16" disabled>You have completed this mission</button>
            @else
                <button id="take-mission-button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block bg-red-700 text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-16 hover:bg-red-800">Take a mission</button>
            @endif

            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to take this mission?</h3>
                            <button data-modal-hide="popup-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center" onclick="takeMission({{ $mission->id }})">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ml-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
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
    // Function to show popup
    function showPopup(index) {
        var popup = document.getElementById('popup-' + index);
        if (popup) {
            popup.classList.remove('hidden');
        }
    }

    // Function to close popup
    function closePopup(index) {
        var popup = document.getElementById('popup-' + index);
        if (popup) {
            popup.classList.add('hidden');
        }
    }

    // Function to take a mission
    function takeMission(missionId) {
        fetch('/api/take-mission', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                mission_id: missionId,
                user_id: {{ auth()->user()->id }}
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Show checkboxes for steps
                document.querySelectorAll('.step-container').forEach((container, index) => {
                    container.querySelector('input[type="checkbox"]').classList.remove('hidden');
                    container.querySelector('input[type="checkbox"]').disabled = false;
                    if (index > 0) {
                        container.classList.add('hidden');
                    }
                });
                document.getElementById('take-mission-button').classList.add('hidden');
                startCountdown(new Date(data.userMission.joined_at));
            } else {
                alert(data.message || 'Failed to take mission');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred');
        });
    }

    // Function to submit a step
    function submitStep(index) {
        var form = document.getElementById('popupForm-' + index);
        var input = form.querySelector('input, select');
        var formData = new FormData(form);

        if (input && input.type !== 'hidden' && !input.value) {
            alert('Please complete the input for this step.');
            return;
        }

        var checkbox = document.getElementById('togglePopup-' + index);
        if (checkbox) {
            checkbox.disabled = false;
            checkbox.checked = true;
        }

        var nextStep = document.querySelector('.step-container[data-index="' + (index + 1) + '"]');
        if (nextStep) {
            nextStep.classList.remove('hidden');
        }

        closePopup(index);

        formData.append('mission_id', {{ $mission->id }});
        formData.append('step_index', index);
        if (input) {
            formData.append('step_value', input.value);
        }

        fetch('/api/complete-step', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                if (!nextStep) {
                    fetch('/api/complete-mission', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            mission_id: {{ $mission->id }},
                            user_id: {{ auth()->user()->id }}
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            alert('Mission completed successfully!');
                        } else {
                            alert(data.message || 'Failed to complete mission');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred');
                    });
                }
            } else {
                alert(data.message || 'Failed to complete step');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred');
        });
    }

    // Countdown timer function
    function startCountdown(startTime) {
        var countdownElement = document.getElementById('countdown');
        var countDownDate = new Date(startTime).getTime() + 40 * 60 * 60 * 1000; // 40 hours from start time

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownElement.innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                countdownElement.innerHTML = "EXPIRED";
                disableMission();
            }
        }, 1000);
    }

    function disableMission() {
        document.getElementById('take-mission-button').classList.add('hidden');
        document.querySelectorAll('.step-container input[type="checkbox"]').forEach(function(checkbox) {
            checkbox.disabled = true;
        });
        alert('Your time to complete this mission has expired.');
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.step-container').forEach(function (container) {
            container.addEventListener('click', function () {
                var index = container.getAttribute('data-index');
                showPopup(index);
            });
        });
    });

</script>
@endsection
