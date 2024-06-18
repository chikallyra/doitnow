@extends('admin.dasboard.layouts.maindashboard')
@section('container')
    <div class="pt-24 h-screen">
        <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-4xl font-bold mb-6 text-center text-red-600">Create Category Blog</h2>
                <form action="{{ route('bcategories.store') }}" method="POST">
                    @csrf
                    {{-- <!-- Nama -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama"
                               class="shadow appearance-none bg-white border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div> --}}
                    
                    <!-- Kategori -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                        <input type="text" id="category" name="name" placeholder="Masukkan kategori"
                               class="shadow appearance-none bg-white border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                               @error('name')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                    
                    <!-- Deskripsi -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                        <textarea id="description" name="desc" rows="4" placeholder="Masukkan deskripsi"
                                  class="shadow appearance-none bg-white border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                                  @error('desc')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                    
                    <!-- Tombol Submit -->
                    <div class="flex items-center justify-between">
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection