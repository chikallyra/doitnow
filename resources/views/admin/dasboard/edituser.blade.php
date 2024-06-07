@extends('admin.dasboard.layouts.maindashboard')
@section('container')
    <div class="pt-24">
        <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-4xl font-bold mb-6 text-center text-red-600">Edit User</h2>
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Nama -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Masukkan nama"
                               class="shadow appearance-none bg-white border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="text" id="category" name="category" value="{{ $user->email }}" placeholder="Masukkan kategori"
                               class="shadow appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
                    </div>

                    <!-- Phone -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                        <input type="text" id="category" name="category" value="{{ $user->phone }}" placeholder="Masukkan kategori"
                               class="shadow appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
                    </div>
                    
                    {{-- <!-- Phone -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                        <textarea id="description" name="description" rows="4" placeholder="Masukkan deskripsi"
                                  class="shadow appearance-none bg-white border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div> --}}
                    
                    <!-- Tombol Submit -->
                    <div class="flex items-center justify-between">
                        <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection