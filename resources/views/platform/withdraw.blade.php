@extends('platform.layouts.main_p')

@section('container')
    <section class="bg-white h-screen">

        {{-- navbar --}}
        <section class="w-full bg-white fixed z-30">
            <div class="flex-grow justify-center lg:mx-24 mx-10 pt-5">
                <a href="/platform"><i class="fas fa-arrow-left text-black font-bold text-3xl"></i></a>
                <h1 class="text-black text-2xl font-bold text-center mt-[-30px] pb-3">Withdraw</h1>   
            </div>
            <div class="border-b-2 border mt-2 border-gray-300"></div>
        </section>
        {{-- end navbar --}}

        {{-- content --}}
        <section class="lg:pt-40 pt-20 flex justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-xl w-full mx-5">
                <h2 class="text-3xl font-bold mb-4 text-gray-800 text-center">Withdraw Funds</h2>
                
                <form id="withdraw-form" class="space-y-4" method="POST" action="{{ route('withdraw.store') }}">
                    @csrf

                    <!-- Radio Buttons for Amount -->
                    <div>
                        <h3 class="mb-5 text-lg font-medium text-gray-900">Amount</h3>
                        <ul class="grid gap-6 md:grid-cols-3 grid-cols-3">
                            <li>
                                <input type="radio" id="amount-5000" name="amount" value="5000" class="hidden peer" required />
                                <label for="amount-5000" class="flex items-center justify-center p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white hover:text-white hover:bg-red-600">
                                    <div class="text-lg font-semibold">5000</div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="amount-10000" name="amount" value="10000" class="hidden peer">
                                <label for="amount-10000" class="flex items-center justify-center p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white hover:text-white hover:bg-red-600">
                                    <div class="text-lg font-semibold">10000</div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="amount-15000" name="amount" value="15000" class="hidden peer">
                                <label for="amount-15000" class="flex items-center justify-center p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white hover:text-white hover:bg-red-600">
                                    <div class="text-lg font-semibold">15000</div>
                                </label>
                            </li>
                        </ul>
                        <p id="error-message" class="text-red-500 text-sm mt-1 hidden">Please select an amount of at least 5000.</p>
                    </div>

                    <!-- Payment Method -->
                    <div>
                        <label for="payment-method" class="mb-5 text-lg font-medium text-gray-900">Payment Method</label>
                        <select id="payment-method" name="payment_method" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                            <option value="">Select method</option>
                            <option value="dana">Dana</option>
                            <option value="gopay">Gopay</option>
                        </select>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-6">
                        <label for="tel" class="mb-5 text-lg font-medium text-gray-900">Phone Number</label>
                        <input type="tel" id="tel" name="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-red-600 text-white p-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Withdraw</button>
                </form>

                <!-- Success Message -->
                <div id="success-message" class="hidden p-4 mt-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    Withdrawal request has been submitted successfully!
                </div>
            </div>

            <script>
                document.getElementById('withdraw-form').addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah submit default

                    const amount = document.querySelector('input[name="amount"]:checked');
                    const errorMessage = document.getElementById('error-message');
                    const successMessage = document.getElementById('success-message');

                    // Validasi jumlah minimum
                    if (!amount || parseInt(amount.value) < 5000) {
                        errorMessage.classList.remove('hidden');
                        return; // Jangan lanjutkan submit
                    }

                    errorMessage.classList.add('hidden'); // Sembunyikan pesan kesalahan

                    // Tampilkan pesan sukses
                    successMessage.classList.remove('hidden');

                    // Submit form setelah validasi
                    this.submit();
                });
            </script>
        </section>
    </section>
@endsection
