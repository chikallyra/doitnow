@extends('admin.dasboard.layouts.maindashboard')
@section('container')
    <div class="pt-24 mx-32">
        <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-red-800 text-white px-4 py-2">
                    <h2 class="text-xl font-semibold">Detail Data</h2>
                </div>
                <!-- Content -->
                <div class="p-4 text-black">
                    <!-- Entry 1 -->
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">First Name </div>
                        <div>John</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Last Name </div>
                        <div>Doe</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Email </div>
                        <div>john.doe@example.com</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Phone Number </div>
                        <div>(123) 456-7890</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-gray-200 py-2">
                        <div class="text-gray-800 font-semibold">Message </div>
                        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab magni, deleniti eveniet exercitationem nisi architecto minus. Quae, id asperiores! Labore velit excepturi laudantium, quae voluptates tempore consectetur error laboriosam quis quam praesentium aut, natus at? Tempora distinctio voluptatibus exercitationem error quaerat excepturi itaque nemo velit eaque ullam molestiae quibusdam quasi voluptatem tenetur recusandae, numquam officiis illo officia odio atque. Quam qui, dolorem animi beatae odit expedita esse cupiditate eum quod dicta laboriosam corrupti aliquam amet accusantium pariatur vero eligendi distinctio minima iusto reiciendis culpa? Rem consequatur sint minima enim sapiente soluta nam ullam. Quis magnam culpa doloribus praesentium, cupiditate ipsum.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection