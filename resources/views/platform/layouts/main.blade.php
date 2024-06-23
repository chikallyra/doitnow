<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])

  {{-- logo --}}
  <link rel="icon" href="/img/logo_d.png">
  
  {{-- icon --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef"/>
  <link rel="apple-touch-icon" href="{{ asset('../icon/logo_d.png') }}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">

  <!-- Meta Tags -->
  <meta name="keywords" content="doitnow.id, penghasilan tambahan, pekerjaan sampingan, freelance mahasiswa, freelance pelajar, kerja di rumah, kerja tanpa modal, kegiatan produktif, penambah followers, aplikasi penambah followers tiktok, penambah followers ig gratis, bot youtube view, penambah pengikut fb, meningkatkan brand awareness, meningkatkan engagement">
  <meta name="description" content="DoitNow adalah platform yang membantu Anda mendapatkan penghasilan tambahan, bekerja dari rumah tanpa modal, melakukan kegiatan produktif, meningkatkan brand awareness, meningkatkan engagement, dan menambah followers.">
  
  <!-- Social Media Meta Tags -->
  <meta property="og:title" content="DoitNow - Join With Us">
  <meta property="og:description" content="DoitNow adalah platform yang membantu Anda mendapatkan penghasilan tambahan, bekerja dari rumah tanpa modal, melakukan kegiatan produktif, meningkatkan brand awareness, meningkatkan engagement, dan menambah followers.">
  <meta property="og:image" content="{{ asset('/img/meta-tag/doitnow.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="DoitNow - Join With Us">
  <meta name="twitter:description" content="DoitNow adalah platform yang membantu Anda mendapatkan penghasilan tambahan, bekerja dari rumah tanpa modal, melakukan kegiatan produktif, meningkatkan brand awareness, meningkatkan engagement, dan menambah followers.">
  <meta name="twitter:image" content="{{ asset('/img/meta-tag/doitnow-introduction.jpg') }}">

  {{-- tinymce --}}
  <x-head.tinymce-config/>

  <title>DoitNow</title>

</head>
<body class="bg-white">
    @include('platform.layouts.navbar', ['user' => auth()->user()])
    @yield('container')

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
            (registration) => {
                console.log("Service worker registration succeeded:", registration);
            },
            (error) => {
                console.error(`Service worker registration failed: ${error}`);
            },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>
{{-- script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    AOS.init();
  </script>

<script>
    // JavaScript untuk live search menggunakan Fetch API
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search');
        searchInput.addEventListener('input', function() {
            const keyword = this.value.trim();
            if (keyword.length > 2) {
                fetch(`/search?keyword=${keyword}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const searchResults = document.getElementById('search-results');
                    if (data.error) {
                        searchResults.innerHTML = '<div class="p-4 bg-red-100 text-red-800 rounded-lg">An error occurred.</div>';
                    } else if (data.length === 0) {
                        searchResults.innerHTML = '<div class="p-4 bg-yellow-100 text-yellow-800 rounded-lg">No results found.</div>';
                    } else {
                        searchResults.innerHTML = data.map(mission => {
                            return `
                                @foreach ($missions as $mission)
                                    <a href="{{ route('platform.misi', $mission->id) }}" class="flex justify-center">
                                        <div id="container" class="h-40 container rounded-lg my-3 border-2 shadow-lg mb-5 shadow-gray-400 transition ease-in-out delay-100 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-gray-100 duration-300">
                                            <div class="flex items-start mx-3 lg:mx-10 mt-5">
                                                <div class="border-4 border-red-700 w-2/5 lg:w-24 h-2/5 rounded-3xl mt-2">
                                                    <img src="{{ asset('storage/' . $mission->image) }}" class="w-24 h-24 lg:w-24 lg:h-24 mx-auto rounded-3xl" alt="misi foto">
                                                </div>
                                                <div class="truncate ml-2 lg:ml-8">
                                                    <div class="flex justify-between gap-2">
                                                        <ul class="flex justify-between gap-2 items-center">
                                                            <li class="border-2 border-red-600 bg-red-500 text-white font-medium rounded-lg px-1 text-sm w-full uppercase">{{ $mission->category->name }}</li>
                                                            <li class="text-[10px] text-white bg-gray-500 rounded-md px-2 uppercase max-w-md lg:text-[12px] text-left py-1 font-medium" data-end-time="{{ $mission->end_time_unix }}"> {{ $mission->formatted_start_date }} - {{ $mission->formatted_end_date }} | 
                                                                <span class="time-remaining hidden md:block" data-time-ago="{{ $mission->time_ago }}">
                                                                {{ $mission->time_ago }}
                                                            </span></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="text-black font-semibold text-lg truncate">{{ $mission->title }}</h2>
                                                    <p class="text-sm">{{ $mission->max_missionaries }} participant only</p>
                                                    <div class="border-4 border-white bg-red-600 flex items-center justify-center rounded-full w-10 h-10 mt-2">
                                                        <h1 class="text-base text-center text-white font-bold">Rp</h1>
                                                    </div>
                                                    <div class="flex justify-start items-center mt-[-35px] ml-12">
                                                        <h1 class="text-2xl text-red-600 font-medium">{{ $mission->reward->reward }}</h1>    
                                                    </div>                      
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            `;
                        }).join('');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    const searchResults = document.getElementById('search-results');
                    searchResults.innerHTML = '<div class="p-4 bg-red-100 text-red-800 rounded-lg">An error occurred while searching.</div>';
                });
            } else {
                document.getElementById('search-results').innerHTML = ''; // Bersihkan hasil jika kurang dari 3 karakter
            }
        });
    });
</script>

</html>
