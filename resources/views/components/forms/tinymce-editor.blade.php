<div>
    <form action="{{ route('addBlog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @error('title')
            <div class="text-red-600">{{ $message }}</div>
        @enderror

        <textarea id="myeditorinstance" name="body">Hello, World!</textarea>
        @error('body')
            <div class="text-red-600">{{ $message }}</div>
        @enderror

        <input type="file" name="image" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror

        <button type="submit" class="w-full text-white bg-[#DD2120] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-base px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
