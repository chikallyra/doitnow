<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="icon" href="/img/logo_d.png">
    {{-- Font-Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    {{-- icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
   rel="stylesheet">
   {{-- css --}}
   <link rel="stylesheet" href="css/style.css">
   
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('../icon/logo_d.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

     <!-- Meta Tags -->
     <meta name="keywords" content="doitnow.id, penghasilan tambahan, pekerjaan sampingan, freelance mahasiswa, freelance pelajar, kerja di rumah, kerja tanpa modal, kegiatan produktif, penambah followers, aplikasi penambah followers tiktok, penambah followers ig gratis, bot youtube view, penambah pengikut fb, meningkatkan brand awareness, meningkatkan engagement">
     <meta name="description" content="DoitNow adalah platform yang membantu Anda mendapatkan penghasilan tambahan, bekerja dari rumah tanpa modal, melakukan kegiatan produktif, meningkatkan brand awareness, meningkatkan engagement, dan menambah followers.">
    <title>DoitNow</title>
</head>

<body class=" bg-white ">
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

{{-- script js --}}
<script src="https://cdn.tailwindcss.com"></script>
{{-- <script src="/js/script.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

{{-- vanilla tilt --}}
{{-- <script type="text/javascript" src="/js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelector(".car-img"), {
        max: 25,
        speed: 400
    });
     --}}
    {{-- //It also supports NodeList
    // VanillaTilt.init(document.querySelectorAll(".your-element")); --}}
</script>

</html>