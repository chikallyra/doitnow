@extends('admin.dasboard.layouts.maindashboard')

@section('container')
    <div class="pt-24 mx-20">
        <h1 class="text-red-600 font-bold text-5xl mb-12">Categories Content</h1>
        <a href="{{ route('categories.create') }}" class="bg-red-400 py-1.5 px-5 text-lg text-white font-semibold rounded-lg shadow-md shadow-slate-400 hover:bg-red-600 ml-10 mb-10  "> + Create Blog</a>
        <div class="flex justify-center items-center">
            <div class="container mx-auto">
                <div class="bg-white shadow-md rounded-lg overflow-x-auto mt-5">
                    <table class="min-w-full divide-y divide-gray-200 ">
                        <thead class="bg-red-500 text-white ">
                            <tr class="text-center text-black">
                                <th class="py-3 px-4 border  text-xs font-medium uppercase tracking-wider">No</th>
                                <th class="py-3 px-4 border  text-xs font-medium uppercase tracking-wider">Name</th>
                                <th class="py-3 px-4 border  text-xs font-medium uppercase tracking-wider">Description</th>
                                <th class="py-3 px-4 border  text-xs font-medium uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-center border-2">
                            <tr class="text-black">
                                <td class="py-3 px-4 border">1</td>
                                <td class="py-3 px-4 border">Product A</td>
                                <td class="py-3 px-4 border">This is a description of Product A.</td>
                                <td class="py-3 px-4 border flex justify-center space-x-2">
                                    <a href="{{ route('categories.edit') }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">Edit</a>
                                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection