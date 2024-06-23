@extends('platform.layouts.main_p')

@section('container')
    {{-- Navbar --}}
    <section class="w-full bg-white fixed z-30">
        <div class="flex justify-between items-center lg:mx-24 mx-10 pt-5 py-5">
            <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
            <h1 class="text-black text-2xl font-bold">Mission Center</h1>
            <ul class="flex">
                <li>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class=" " type="button">
                        <i class="fas fa-sliders-h mx-3 text-black font-bold text-3xl"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li><a href="{{ route('platform.mission_c', ['category_id' => 'all']) }}" class="block px-4 py-2 hover:bg-gray-100">All</a></li>
                            @foreach($categories as $category)
                                <li><a href="{{ route('platform.mission_c', ['category_id' => $category->id]) }}" class="block px-4 py-2 hover:bg-gray-100">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="border-b-2 border mt-2 border-gray-300"></div>
    </section>
    {{-- endnavbar --}}

    {{-- live searching --}}
    <div class="mx-5 lg:mx-32 pt-32">
        <form id="search-form">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="keyword" name="keyword" class="w-full bg-gray-50 border border-red-500 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block lg:w-96 ps-10 p-2.5" placeholder="Find a mission"/>
            </div>
        </form>
    </div>
    {{-- end live searching --}}

    {{-- Content --}}
    <div id="missions-container" class="mx-10 lg:mx-32 bg-white h-full pb-10">
        @if($missions->isEmpty())
            <p class="text-center text-gray-500">No missions available in this category.</p>
        @else
            @foreach ($missions as $mission)
                @include('platform.partials.mission_card', ['mission' => $mission])
            @endforeach
        @endif
    </div>

    <div id="loading-spinner" style="display: none; text-align: center; margin-top: 20px;">
        <p>Loading...</p>
    </div>

    {{-- JavaScript for live search --}}
<script>
    document.getElementById('keyword').addEventListener('input', function() {
        const keyword = this.value;
        const missionsContainer = document.getElementById('missions-container');
        const loadingSpinner = document.getElementById('loading-spinner');

        if (keyword.length >= 3) { // Minimum length for keyword
            loadingSpinner.style.display = 'block';
            missionsContainer.innerHTML = '';

            fetch(`{{ route('search.misi') }}?keyword=${keyword}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    loadingSpinner.style.display = 'none';
                    if (data.length > 0) {
                        missionsContainer.innerHTML = ''; // Clear container before appending new results
                        data.forEach(mission => {
                            const missionCard = `
                                <a href="/platform/misi/${mission.id}" class="">
                                    <div id="container" class="h-40 rounded-lg my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
                                        <div class="flex items-start mx-3 lg:mx-10 mt-5">
                                            <div class="border-4 border-red-700 w-2/5 lg:w-24 h-2/5 rounded-3xl mt-2">
                                                <img src="/storage/${mission.image}" class="w-24 h-24 lg:w-24 lg:h-24 mx-auto rounded-3xl" alt="misi foto">
                                            </div>
                                            <div class="truncate ml-2 lg:ml-8">
                                                <div class="flex justify-between gap-2 ">
                                                    <ul class="flex justify-between gap-2 items-center">
                                                        <li class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-full uppercase">${mission.category.name}</li>
                                                        <li class=" text-[10px] text-white bg-gray-500 rounded-md px-2 uppercase max-w-md lg:text-[12px] text-left py-1 font-medium" data-end-time="${mission.end_time_unix}"> ${mission.formatted_start_date} - ${mission.formatted_end_date} | 
                                                            <span class="time-remaining" data-time-ago="${mission.time_ago}">
                                                            ${mission.time_ago}
                                                        </span></li>
                                                    </ul>
                                                </div>
                                                <h2 class="text-black font-semibold text-lg truncate">${mission.title}</h2>
                                                <p class="text-sm">${mission.max_missionaries} participant only</p>
                                                <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2">
                                                    <h1 class="text-base text-center text-white font-bold">Rp</h1>
                                                </div>
                                                <div class="flex justify-start items-center mt-[-35px] ml-12">
                                                    <h1 class="text-2xl text-red-600 font-medium">${mission.reward.reward}</h1>    
                                                </div>                      
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `;

                            missionsContainer.innerHTML += missionCard;
                        });

                        // Apply any additional JS to format or handle time-related data if needed
                    } else {
                        missionsContainer.innerHTML = '<p class="text-center text-gray-500">No missions found.</p>';
                    }
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    missionsContainer.innerHTML = '<p class="text-center text-gray-500">An error occurred: ' + error.message + '. Please try again later.</p>';
                    loadingSpinner.style.display = 'none';
                });
        } else {
            loadingSpinner.style.display = 'none';
        }
    });
</script>
@endsection
