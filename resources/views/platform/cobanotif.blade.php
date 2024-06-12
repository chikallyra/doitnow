@extends('platform.layouts.main_p')
@section('container')
    {{-- navbar --}}
    <div class="flex justify-start lg:mx-24 mx-10 pt-5">
        <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
        <h1 class="text-black text-2xl font-bold text-center ml-10">Notifications</h1>
    </div>
    <div class="border-b-2 border mt-2 border-gray-300"></div>
    {{-- end navbar --}}


    {{-- content --}}
    <div class="mt-10 bg-white h-screen" id="notifications-container">
        <!-- Notifikasi akan dimuat di sini menggunakan AJAX -->
    </div>
    {{-- end content --}}
@endsection

@section('script')
    <script>
        // Ambil notifikasi dari server menggunakan AJAX
        fetch('/notifications')
            .then(response => response.json())
            .then(data => {
                const notificationsContainer = document.getElementById('notifications-container');
                data.notifications.forEach(notification => {
                    notificationsContainer.innerHTML += `
                        <div class="bg-white rounded-2xl mx-2 hover:bg-gray-100 lg:mx-20 mb-3 p-4 border border-red-600">
                            <div class="flex flex-row items-center">
                                <div class="border-4 border-red-600 bg-red-600 rounded-full w-10 h-10 flex items-center justify-center mt-2">
                                    <img src="/img/notif.png" alt="">
                                </div>
                                <div class="ml-4">
                                    <h2 class="text-black font-bold">${notification.data.title}</h2>
                                    <p class="text-gray-500">${notification.data.message}</p>
                                </div>
                            </div>
                        </div>
                    `;
                });
            })
            .catch(error => console.error(error));
    </script>
@endsection
