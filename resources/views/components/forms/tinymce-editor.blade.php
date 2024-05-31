<div>
    <form action="{{ route('addBlog') }}" method="POST" enctype="multipart/form-data " class="mx-20 mt-10">
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-xl font-medium text-gray-900 ">Title</label>
            <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5  " placeholder="Enter your title">
        </div>
        @error('title')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <form class="mb-4 mt-4">
            <label for="countries" class="mb-2 text-lg font-medium text-black ml-1 ">Category</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 mt-2 text-black text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 ">
            <option selected>Choose a Type Mission</option>
            <option value="D">Daily</option>
            <option value="W">Weekyl</option>
            <option value="M">Monthly</option>
            </select>
        </form>
        @error('category')
            <div class="text-red-600">{{ $message }}</div>
        @enderror

        <div class="mx-20 mt-6 ">
            <label for="title" class="block mb-2 text-xl font-medium text-gray-900 ">Description</label>
            <textarea id="myeditorinstance" name="body" class="" ></textarea>
        </div>
        
        @error('body')
            <div class="text-red-600">{{ $message }}</div>
        @enderror

        <div>

        </div>
        
        <div class="mx-20 mt-6">
            <label for="title" class="block mb-2 text-xl font-medium text-gray-900 ">Image</label>
        <input type="file" name="image" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
        </div>
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror

        <div class="flex justify-end items-end mr-20 mt-4">
            <button type="submit" class=" text-white bg-[#DD2120] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-lg px-10 py-2.5 text-center">Submit</button>
        </div>
        
    </form>
</div>
