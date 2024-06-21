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
    {{--  endnavbar --}}
    
    
{{-- live searching --}}
<div class=" mx-5 lg:mx-32 pt-32">
    <form class="">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="search" name="keyword" id="simple-search" class="w-full bg-gray-50 border border-red-500 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block lg:w-96 ps-10  p-2.5 " placeholder="Find a mission"  />
        </div>
        
{{-- end live searching --}}

    {{-- Content --}}
    <div id="missions-container" class="mx-10 lg:mx-32  bg-white h-full pb-10">
        

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
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    let page = 1;
    let loading = false;

    function loadMoreMissions() {
        if (loading) return;

        loading = true;
        document.getElementById('loading-spinner').style.display = 'block';

        page++;
        const urlParams = new URLSearchParams(window.location.search);
        const categoryId = urlParams.get('category_id') || 'all';

        fetch(`{{ route('platform.mission_c') }}?page=${page}&category_id=${categoryId}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(data => {
            if (data.trim().length === 0) {
                // No more data
                window.removeEventListener('scroll', handleScroll);
                document.getElementById('loading-spinner').style.display = 'none';
                return;
            }

            document.getElementById('missions-container').insertAdjacentHTML('beforeend', data);
            document.getElementById('loading-spinner').style.display = 'none';
            loading = false;
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('loading-spinner').style.display = 'none';
            loading = false;
        });
    }

    function handleScroll() {
        const bottomOfWindow = window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 100;

        if (bottomOfWindow) {
            loadMoreMissions();
        }
    }

    window.addEventListener('scroll', handleScroll);
});
</script>
@endsection
