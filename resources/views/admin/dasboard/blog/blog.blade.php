@extends('admin.dasboard.layouts.maindashboard')

@section('container')
 <section>
    <div class="mx-10 pt-32 pb-20">
        <h1 class="text-red-600 font-bold text-5xl mb-12">Blog Content</h1>
        <a href="{{ route('blog.create') }}" class="bg-red-400 py-1.5 px-5 text-lg text-white font-semibold rounded-lg shadow-md shadow-slate-400 hover:bg-red-600  "> + Create Blog</a>
                
        <div class="relative overflow-x-auto mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500  ">
                <thead class="text-xs text-white uppercase bg-red-600 text-center rounded-md border-2 border-black">
                    <tr class="border-2 border-black  ">
                        <th scope="col" class="px-6 py-3 border-2 border-black ">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 border-2 border-black">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3 border-2 border-black">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 border-2 border-black">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3 border-2 border-black">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 border-2 border-black ">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($blogs as $blog)
    
                    <tr class="bg-red-100 text-black text-center ">
                        <th scope="row" class="px-6 py-4 border-2 border-black font-medium  whitespace-nowrap  ">
                            {{ $no++ }}
                        </th>
                        <td class="px-6 py-4 border-2 border-black">
                            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid mt-3" alt="{{ $blog->title }}" width="50pt" height="50pt">
                        </td>
                        <td class="px-6 py-4 border-2 border-black">
                            {{ $blog->title }}
                        </td>
                        <td class="px-6 py-4 border-2 border-black">
                            {{ optional($blog->blogCategory)->name }}
                        </td>
                        <td class="px-6 py-4 border-2 border-black">
                            {{ $blog->excerpt }}
                        </td>
                        <td class="px-6 py-4 border-2 border-black">
                            <div class="grid grid-cols-3">
                                <form onsubmit="return confirm('Are You Sure?');" action="{{ route('destroy.blog', $blog->id) }}" method="POST">
                                    <div>
                                        <a href="{{ route('blog.show', $blog->slug) }}"><i class="far fa-eye hover:text-green-500"></i></a> 
                                    </div>
                                    <div>
                                        <a href="{{ route('edit.blog', $blog->id) }}"><i class="far fa-edit hover:text-yellow-500"></i></a>
                                    </div>
                                    <div>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="far fa-trash-alt hover:text-red-500"></i></button>
                                    </div>
                                </form>
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
 </section>

    
@endsection