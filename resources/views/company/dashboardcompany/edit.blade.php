@extends('company.dashboardcompany.layouts.main')
@section('container')
<section class="pt-64 pb-10">
    <div class="h-full">
        <h1 class="ml-36 mt-5 text-4xl uppercase tracking-wider font-bold text-red-600 mb-5">Edit Mission</h1>
        <a href="{{ route('company') }}" class="ml-36 bg-red-400 px-5 py-1 rounded-xl text-base hover:bg-red-500 text-white font-medium">Back</a>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('update.mission', $mission->id) }}" method="POST" enctype="multipart/form-data" class="mx-10 mb-8">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-1">
                {{-- Add Foto --}}
                <div class="mt-8">
                    <div class="flex items-center justify-center">
                        <div class="relative w-64 h-64 border-2 border-dashed border-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
                            <img id="image-preview" src="{{ asset('/storage/' . $mission->image) }}" alt="Preview" class="absolute w-full h-full object-cover hidden" />
                            <span id="upload-placeholder" class="text-gray-500">Pilih Gambar</span>
                            <input id="image-input" name="image" type="file" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" />
                            @error('image')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <h2 class="mt-3 text-center mr-4 text-lg font-medium text-red-500">Edit Picture</h2>
                </div>
                {{-- End Add Foto --}}

                {{-- Form --}}
                <div class="lg:col-span-2 mt-8">
                    <div class="mb-4">
                        <label for="mission_name" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Mission Name</label>
                        <input type="text" name="title" value="{{ old('title', $mission->title) }}" id="mission_name" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Name of mission" required />
                        @error('title')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <h1 class="mb-2 text-lg font-medium text-black ml-1">Category</h1>
                    <fieldset class="flex flex-wrap gap-3">
                        <legend class="sr-only text-black">Category Options</legend>
                        @foreach ($category as $id => $name)
                        <div>
                            <label for="category{{ $id }}" class="flex cursor-pointer items-center justify-center rounded-md border border-gray-300 bg-gray-300 px-3 py-2 text-gray-900 hover:border-gray-200 has-[:checked]:border-red-600 has-[:checked]:bg-red-600 has-[:checked]:text-white">
                                <input type="radio" name="category_id" id="category{{ $id }}" value="{{ $id }}" class="sr-only" {{ $mission->category_id == $id ? 'checked' : '' }} />
                                <p class="text-sm font-medium uppercase tracking-widest">{{ $name }}</p>
                            </label>
                        </div>
                        @endforeach
                    </fieldset>

                    {{-- Mission Activate --}}
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                        <div class="mb-4 mt-4">
                            <h1 class="text-xl text-black font-semibold mb-2">Mission Activate</h1>
                            <label class="block text-gray-400 text-sm font-bold mb-2" for="day_start">From</label>
                            <div class="flex space-x-2">
                                <input type="number" id="day_start" name="day_start" value="{{ old('day_start', $day_start) }}" placeholder="DD" min="1" max="31" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                                <input type="number" id="month_start" name="month_start" value="{{ old('month_start', $month_start) }}" placeholder="MM" min="1" max="12" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                                <input type="number" id="year_start" name="year_start" value="{{ old('year_start', $year_start) }}" placeholder="YYYY" min="1900" max="2100" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                            </div>
                            @error('day_start')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                            @error('month_start')
                            <div class="text-red-500">
                                {{ $message }}
                            @enderror
                            @error('year_start')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4 mt-[53px]">
                            <label class="block text-gray-400 text-sm font-bold mb-2" for="day_end">Until</label>
                            <div class="flex space-x-2">
                                <input type="number" id="day_end" name="day_end" value="{{ old('day_end', $day_end) }}" placeholder="DD" min="1" max="31" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                                <input type="number" id="month_end" name="month_end" value="{{ old('month_end', $month_end) }}" placeholder="MM" min="1" max="12" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                                <input type="number" id="year_end" name="year_end" value="{{ old('year_end', $year_end) }}" placeholder="YYYY" min="1900" max="2100" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                            </div>
                            @error('day_end')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                            @error('month_end')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                            @error('year_end')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    {{-- End Mission Activate --}}

                    {{-- Mission Targets --}}
                    <div class="mb-4">
                        <label for="quantity-input" class="block text-xl text-black font-semibold mb-2">Mission Targets</label>
                        <div class="relative flex items-center max-w-[8rem]">
                            <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="text" name="max_missionaries" value="{{ old('max_missionaries', $mission->max_missionaries) }}" id="quantity-input" data-input-counter data-input-counter-min="1" data-input-counter-max="50" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5" placeholder="999" required />
                            @error('max_missionary')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                            <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    {{-- End Mission Targets --}}

                    {{-- Link --}}
                    <div class="mb-4">
                        <label for="mission_link" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Link <span class="text-sm text-gray-400">(optional)</span></label>
                        <input type="text" name="link" value="{{ old('link', $mission->link) }}" id="mission_link" class="bg-gray-50 border-2 border-gray-300 text-black text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="https://example.com" />
                        @error('link')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- End Link --}}

                    {{-- Rewards --}}
                    <div class="mb-4">
                        <label for="new_reward" class="block text-xl text-black font-semibold mb-2">Rewards</label>
                        <input type="text" name="new_reward" value="" id="new_reward" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="RP. ....">
                        @error('new_reward')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="existing_reward" class="block text-xl text-black font-semibold mb-2">Existing Reward:</label>
                        <select id="existing_reward" name="existing_reward" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">-- Select a Reward --</option>
                            @foreach($rewards as $id => $reward)
                                <option value="{{ $id }}" {{ old('existing_reward', $mission->reward_id) == $id ? 'selected' : '' }}>{{ $reward }}</option>
                            @endforeach
                        </select>
                        @error('existing_reward')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- End Rewards --}}

                    {{-- Steps --}}
                    <div class="mb-4">
                        <label for="steps" class="block mb-2 text-lg font-medium text-gray-900">Steps</label>
                        <ul id="steps-list" class="list-group">
                            @php
                                $steps = json_decode($mission->steps, true);
                            @endphp
                            @foreach ($steps as $index => $step)
                                <li class="list-group-item">
                                    <select name="steps[{{ $index }}][type]" class="form-control mb-2 bg-white border-2 text-black rounded-lg px-5 py-1">
                                        <option value="text" {{ $step['type'] == 'text' ? 'selected' : '' }}>Text</option>
                                        <option value="file" {{ $step['type'] == 'file' ? 'selected' : '' }}>File</option>
                                        <option value="hidden" {{ $step['type'] == 'hidden' ? 'selected' : '' }}>Confirmation</option>
                                    </select>
                                    <input type="text" name="steps[{{ $index }}][description]" class="form-control mb-2 bg-white border-2 text-black rounded-lg w-full pl-3 py-1" value="{{ $step['description'] }}" placeholder=" -- Step description -- ">
                                    <div class="flex justify-end">
                                        <button type="button" class="bg-red-600 rounded-lg px-2 py-1 text-white hover:bg-red-800 remove-step">Remove</button>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @error('steps')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                        <button type="button" class="bg-slate-800 mt-2 rounded-lg px-8 py-1 text-white hover:bg-slate-950" id="add-step">Add Step</button>
                    </div>
                    {{-- End Steps --}}

                    {{-- Description --}}
                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-lg font-medium text-gray-900 ml-1">Description</label>
                        <textarea id="description" name="description" class="text-black">{{ old('description', $mission->description) }}</textarea>
                        @error('description')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- End Description --}}

                    {{-- Submit Button --}}
                    <div class="flex justify-end items-end">
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-10 py-2.5 mb-5 mr-10">Submit</button>
                    </div>
                    {{-- End Submit Button --}}
                </div>
                {{-- End Form --}}
            </div>
        </form>
    </div>
</section>
@endsection

@section('scripts')

<script>
document.addEventListener('DOMContentLoaded', function() {
    var stepsList = document.getElementById('steps-list');
    var addStepButton = document.getElementById('add-step');

    // Initialize SortableJS
    var sortable = Sortable.create(stepsList, {
        animation: 150,
        onEnd: function(evt) {
            updateStepOrder();
        }
    });

    // Add new step
    addStepButton.addEventListener('click', function() {
        var newStep = document.createElement('li');
        newStep.className = 'list-group-item';
        newStep.innerHTML = `
            <select class="form-control mb-2 bg-white border-2 text-black rounded-lg px-5 py-1">
                <option value="text">Text</option>
                <option value="file">File</option>
                <option value="hidden">Confirmation</option>
                <!-- Add more options for different step types -->
            </select>
            <input type="text" class="form-control mb-2 bg-white border-2 text-black rounded-lg w-full pl-3 py-1" placeholder=" -- Step description -- ">
            <div class="flex justify-end">
                <button type="button" class="bg-red-600 rounded-lg px-2 py-1 text-white hover:bg-red-800 remove-step">Remove</button>
            </div>
        `;
        stepsList.appendChild(newStep);
        updateStepOrder();
    });

    // Remove step
    stepsList.addEventListener('click', function(evt) {
        if (evt.target.classList.contains('remove-step')) {
            evt.target.closest('li').remove();
            updateStepOrder();
        }
    });

    // Update step order
    function updateStepOrder() {
        var steps = stepsList.querySelectorAll('li');
        steps.forEach((step, index) => {
            var stepTypeSelect = step.querySelector('select');
            stepTypeSelect.name = `steps[${index}][type]`;

            var stepDescriptionInput = step.querySelector('input');
            stepDescriptionInput.name = `steps[${index}][description]`;
        });
    }

    // No toggleDescriptionInput logic needed since inputs are always visible

    // Initialize updateStepOrder on page load
    updateStepOrder();
});

$('#description').summernote({
    placeholder: 'Enter mission descriprtion here....',
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
    ]
});

    //   add foto
    document.getElementById('image-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('image-preview');
            const placeholder = document.getElementById('upload-placeholder');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    // Set the preview image's source to the file's data URL
                    preview.src = e.target.result;
                    // Display the image preview and hide the placeholder
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                };

                reader.readAsDataURL(file);
            } else {
                // Hide the preview image and show the placeholder if no file is selected
                preview.classList.add('hidden');
                placeholder.classList.remove('hidden');
                preview.src = '';
            }
    });
</script>

@endsection
