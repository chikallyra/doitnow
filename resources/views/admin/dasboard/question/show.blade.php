@extends('admin.dasboard.layouts.maindashboard')
@section('container')
<section class="h-screen">
    <div class="pt-24 mx-32 ">
        <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-red-800 text-white px-4 py-2">
                    <h2 class="text-xl font-semibold">Detail Question</h2>
                </div>
                <!-- Content -->
                <div class="p-4 text-black">
                    <!-- Entry 1 -->
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">First Name </div>
                        <div>{{ $question->first_name }}</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Last Name </div>
                        <div>{{ $question->last_name }}</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Email </div>
                        <div><a href="mailto:{{ $question->email }}" class="text-center text-blue-500 underline mt-2">{{ $question->email }}</a></div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Phone Number </div>
                        <div><a href="https://wa.me/{{ $question->phone }}" class="text-center text-blue-500 underline mt-2">{{ $question->phone }}</a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Message </div>
                        <div>{{ $question->message }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection