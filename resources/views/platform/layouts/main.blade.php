<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{-- logo --}}
  <link rel="icon" href="/img/logo_d.png">

  {{-- meta tag --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
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
<script src="{{ mix('js/app.js') }}"></script>

</html>