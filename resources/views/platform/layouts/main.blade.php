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
                console.error(Service worker registration failed: ${error});
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
    // JavaScript untuk live search
document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            searchInput.addEventListener('input', function() {
                const keyword = this.value.trim();
                if (keyword.length > 2) {
                    fetch(/search?keyword=${keyword}, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        const searchResults = document.getElementById('search-results');
                        searchResults.innerHTML = data.html;
                    })
                    .catch(error => console.error('Error:', error));
                } else {
                    document.getElementById('search-results').innerHTML = ''; // Bersihkan hasil jika kurang dari 3 karakter
                }
            });
        });
  </script>

</html>