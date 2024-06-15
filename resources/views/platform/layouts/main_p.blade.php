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
   {{-- daisy ui --}}
   <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css" rel="stylesheet" type="text/css" />
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

<body class=" bg-white w-full h-full">
    
    @yield('container')
    @yield('script')

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
</body>

{{-- script js --}}
<script src="https://cdn.tailwindcss.com"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

{{-- copy--}}
<script>
    function copyText() {
        // Dapatkan elemen input dan elemen feedback
        var inputElement = document.getElementById("myInput");
        var feedbackElement = document.getElementById("copyFeedback");

        // Pilih teks di dalam input
        inputElement.select();
        inputElement.setSelectionRange(0, 99999); // Untuk perangkat mobile

        try {
            // Salin teks ke clipboard
            var successful = document.execCommand('copy');
            
            if (successful) {
                // Tampilkan pesan umpan balik
                feedbackElement.classList.remove("hidden");
                
                // Sembunyikan pesan umpan balik setelah 2 detik
                setTimeout(function() {
                    feedbackElement.classList.add("hidden");
                }, 2000);
            } else {
                feedbackElement.innerText = "Failed to copy text";
                feedbackElement.classList.remove("text-green-500");
                feedbackElement.classList.add("text-red-500");
                feedbackElement.classList.remove("hidden");
                
                // Sembunyikan pesan umpan balik setelah 2 detik
                setTimeout(function() {
                    feedbackElement.classList.add("hidden");
                }, 2000);
            }
        } catch (err) {
            console.log('Oops, unable to copy', err);
        }

        // Hapus seleksi
        window.getSelection().removeAllRanges();
    }
</script>

<script>
    
</script>

</html>