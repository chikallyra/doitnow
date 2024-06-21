@extends('platform.layouts.main_p')
@section('container')
    {{-- navbar --}}
    <div class="flex justify-start lg:mx-24 mx-10 pt-5  ">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <h1 class="text-black text-2xl font-bold text-center ml-10   ">Edit Profil</h1>
    </div>
    <div class="border-b-2 border mt-2 border-gray-300"></div>
    {{-- end navbar --}}

    {{-- content --}}
    <div class="bg-white h-full">
            
        <form action="{{ route('platform.profil.edit', $user->id) }}" method="POST" enctype="multipart/form-data" class="mt-8 mx-8">
            @csrf
            @method('PUT')
            {{-- edit foto --}}
            <div class="mt-8 flex flex-col items-center">
                <div class="relative w-64 h-64 border-2 border-dashed border-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
                    <img id="image-preview" src="{{ asset('storage/' . $user->missionary->image) }}" alt="Preview" class="absolute w-full h-full object-cover hidden" />
                    <span id="upload-placeholder" class="text-gray-500">Pilih Gambar</span>
                    <input id="image-input" name="image" type="file" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" />
                    @error('image')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                
                <!-- Edit Picture Text -->
                <h2 class="mt-3 text-lg font-medium text-red-500">Edit Picture</h2>
            </div>
        {{-- end edit foto --}}

        {{-- form --}}
            {{-- name --}}
            <div>
                <label for="name" class="block mb-2 text-base font-medium text-gray-900 ">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="John" required />
            </div>
            {{-- email --}}
            <div class="mt-5">
                <label for="email" class="block mb-2 text-base font-medium text-gray-900 ">Email</label>
                <input type="email" id="email" value="{{ $user->email }}" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="email@example.com" disabled />
            </div>
            {{-- number --}}
            @php
                $phone = $user->phone;

                $formatPhone = preg_replace("/(\d{3})(\d{3})(\d{4})/", "$1-$2-$3", $phone);
            @endphp
            <div class="mt-5">
                <label for="phone-input" class="block mb-2 text-base font-medium text-gray-900 ">Phone number</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                            <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                        </svg>
                    </div>
                    <input type="text" name="phone" value="{{ $formatPhone }}" id="phone-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5  "  placeholder="123-456-7890" required />
                </div>
            </div>
            {{-- brith date --}}
            <div class="mt-5">                            
                    <h1 class="block mb-2 text-base font-medium text-gray-900">Birth Date</h1>
                    <div class="flex space-x-2">
                        <input type="number" id="day" name="day" value="{{ $day }}" placeholder="Day" min="1" max="31" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 placeholder:text-sm focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                        <input type="number" id="month" name="month" value="{{ $month }}" placeholder="Month" min="1" max="12" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 placeholder:text-sm focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                        <input type="number" id="year" name="year" value="{{ $year }}" placeholder="Year" min="1900" max="2100" class="shadow appearance-none border py-2 px-3 text-black leading-tight focus:outline-none placeholder:text-gray-800 placeholder:text-sm focus:shadow-outline bg-gray-50 border-1 rounded-2xl">
                    </div>
                    @error('day')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('month')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('year')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
            </div>
            {{-- gender --}}
            <div class="mt-5">    
                <h3 class="mb-1 text-lg font-medium text-gray-900 ">Gender</h3>
                <ul class="flex  max-w-sm">
                    @php
                        $gender = $missionary ? $missionary->gender : '';
                    @endphp
                    <li class=" mr-3">
                        <input type="radio" name="gender" id="radio_1" value="male" class="hidden peer" {{ optional($missionary)->gender == 'male' ? 'checked' : '' }} required />
                        <label for="radio_1" class="inline-flex items-center justify-between max-w-sm p-1 text-gray-500 bg-gray-200 border border-gray-400 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:text-white peer-checked:bg-red-600 hover:text-white hover:bg-red-500 ">                           
                            <div class="block">
                                <div class=" max-w-sm text-base px-1 font-semibold">Male</div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="radio_2" name="gender" value="female" class="hidden peer" {{ $gender == 'female' ? 'checked' : '' }} required />
                        <label for="radio_2" class="inline-flex items-center justify-between max-w-sm p-1 text-gray-500 bg-gray-200 border border-gray-400 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:text-white peer-checked:bg-red-600 hover:text-white hover:bg-red-500 ">                           
                            <div class="block">
                                <div class=" max-w-sm text-base px-1 font-semibold">Female</div>
                            </div>
                        </label>
                    </li>
                </ul>

            </div>
            {{-- button --}}
            <div class="mt-10 pb-7 flex justify-center items-center">
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-10 py-2 me-2 mb-2 ">Save</button>
            </div>
        </form>
        {{-- end form --}}
    </div>
    {{-- end content --}}

    {{-- script --}}
    <script>
        // add foto
        document.getElementById('image-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('image-preview');
            preview.src = e.target.result;
            preview.classList.remove('hidden'); // Menampilkan gambar
            document.getElementById('upload-placeholder').classList.add('hidden'); // Menyembunyikan placeholder
        };
        reader.readAsDataURL(file);
    }
});
    </script>
@endsection