@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<section class="bg-white min-h-screen pt-32">
    <div class="container mx-auto p-4 text-black">
        <h1 class="text-4xl font-bold mb-8 text-red-600">Mission Withdraw List</h1>
        <a href="" class="bg-red-400 px-5 py-1 rounded-xl hover:bg-red-700 text-white text-lg">Back</a>

        <table class="min-w-full bg-white border-2 border-black mt-9">
            <thead class="bg-red-300 border-2 border-black">
                <tr class="border">
                    <th class="py-2 border-r-2 border-black">NO</th>
                    <th class="py-2 border-r-2 border-black">Username</th>
                    <th class="py-2 border-r-2 border-black">Payment Method</th>
                    <th class="py-2 border-r-2 border-black">Phone Number</th>
                    <th class="py-2 border-r-2 border-black">Amount</th>
                    <th class="py-2 border-r-2 border-black">Status</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($withdrawal as $data)
                <tr class="text-center">
                    <td class="py-2 border-r-2 border-black">{{ $no++ }}</td>
                    <td class="py-2 border-r-2 border-black">{{ $data->missionary->name }}</td>
                    <td class="py-2 border-r-2 border-black">{{ $data->payment_method }}</td>
                    <td class="py-2 px-4 border-r-2 border-black cursor-pointer hover:underline hover:text-blue-500" onclick="copyPhoneNumber('{{ $data->phone_number }}')">
                        {{ $data->phone_number }}
                    </td>
                    <td class="py-2 border-r-2 border-black">{{ $data->amount }}</td>
                    <td class="py-2 border-r-2 border-black">{{ $data->status }}</td>
                    <td class="py-2">
                        @if($data->status === 'pending')
                        <form action="{{ route('withdraw.validate', $data->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                Validate
                            </button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Feedback for copy -->
        <div id="copyFeedback" class="fixed bottom-4 right-4 p-4 bg-green-500 text-white rounded-lg shadow-lg hidden">
            Nomor telepon disalin!
        </div>
    </div>

    {{-- script --}}
    <script>
        // popup
        // Function to display popup
        function showPopup() {
            document.getElementById('popupOverlay').classList.remove('hidden');
        }

        // Function to hide popup
        function hidePopup() {
            document.getElementById('popupOverlay').classList.add('hidden');
        }
        // end popup

        // copy number
        function copyPhoneNumber(phoneNumber) {
            // Create a temporary textarea element
            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = phoneNumber;
            document.body.appendChild(tempTextArea);

            // Copy the text from the textarea
            tempTextArea.select();
            tempTextArea.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand("copy");

            // Remove the textarea element
            document.body.removeChild(tempTextArea);

            // Show feedback
            const feedback = document.getElementById('copyFeedback');
            feedback.classList.remove('hidden');

            // Hide feedback after 2 seconds
            setTimeout(() => {
                feedback.classList.add('hidden');
            }, 2000);
        }
    </script>
</section>

@endsection
