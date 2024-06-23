@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<section class="bg-white min-h-screen pt-32">
    <div class="container mx-auto p-4 text-black">
        <h1 class="text-4xl font-bold  mb-8 text-red-600">Mission Withdraw List</h1>
        <a href="" class="bg-red-400 px-5 py-1 rounded-xl hover:bg-red-700 text-white text-lg  "> Back </a>
    
            <table class="min-w-full bg-white border-2 border-black mt-9">
                <thead class="bg-red-300 border-2 border-black">
                    <tr class="border">
                        <th class="py-2 border-r-2 border-black ">NO</th>
                        <th class="py-2 border-r-2 border-black ">Username</th>
                        <th class="py-2 border-r-2 border-black ">Payment Method</th>
                        <th class="py-2 border-r-2 border-black ">Phone Number</th>
                        <th class="py-2 border-r-2 border-black ">Status</th>
                        <th class="py-2  ">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center ">
                        <td class="py-2 border-r-2 border-black">1</td>
                        <td class="py-2 border-r-2 border-black">Widya</td>
                        <td class="py-2 border-r-2 border-black">Dana</td>
                        <td class="py-2 px-4 border-r-2 border-black cursor-pointer hover:underline hover:text-blue-500 " onclick="copyPhoneNumber('081321487513')">
                            081321487513
                        </td>
                        <td class="py-2 border-r-2 border-black">pending</td>
                        <td class="py-2">
                            <!-- Tombol untuk memicu popup -->
                            <button onclick="showPopup()" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                Validate
                            </button>

                            <!-- Popup overlay -->
                            <div id="popupOverlay" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                                <!-- Popup box -->
                                <div class="bg-white p-6 rounded-lg shadow-lg text-center max-w-sm w-full">
                                    <h2 class="text-2xl font-bold mb-4 text-green-600">Completed</h2>
                                    <p class="text-gray-700 mb-4">The validation process has been successfully completed!</p>
                                    <button onclick="hidePopup()" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                                        OK
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Feedback untuk copy -->
            <div id="copyFeedback" class="fixed bottom-4 right-4 p-4 bg-green-500 text-white rounded-lg shadow-lg hidden">
                Nomor telepon disalin!
            </div>
    </div>

    {{-- script --}}
    <script>
        // pop up
        // Fungsi untuk menampilkan popup
        function showPopup() {
            document.getElementById('popupOverlay').classList.remove('hidden');
        }

        // Fungsi untuk menyembunyikan popup
        function hidePopup() {
            document.getElementById('popupOverlay').classList.add('hidden');
        }
        // end pop up

        // copy number
        function copyPhoneNumber(phoneNumber) {
            // Membuat elemen textarea sementara
            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = phoneNumber;
            document.body.appendChild(tempTextArea);
            
            // Menyalin teks dari textarea
            tempTextArea.select();
            tempTextArea.setSelectionRange(0, 99999); // Untuk perangkat mobile
            document.execCommand("copy");
            
            // Menghapus elemen textarea
            document.body.removeChild(tempTextArea);
            
            // Tampilkan feedback
            const feedback = document.getElementById('copyFeedback');
            feedback.classList.remove('hidden');
            
            // Sembunyikan feedback setelah 2 detik
            setTimeout(() => {
                feedback.classList.add('hidden');
            }, 2000);
        }
    </script>
</section>

@endsection
