@props(['categories'])
<div>
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="mx-20 pt-10">
        @csrf

        <div class="mb-6">
            <label for="title" class="block mb-2 text-xl font-medium text-gray-900">Title</label>
            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Enter your title" value="{{ old('title') }}">
            @error('title')
                <div class="text-red-600">{{ $message }}</div>
            @enderror    
        </div>

        <div class="mb-6">
          <label for="categories" class="block mb-2 text-lg font-medium text-black ml-1">Category</label>
          <select name="blog_category_id" id="categories" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
              <option value="" selected disabled>Choose a Category</option>
              @foreach ($categories as $id => $name)
                  <option value="{{ $id }}" @if(old('blog_category_id') == $id) selected @endif>
                      {{ $name }}
                  </option>
              @endforeach
          </select>
          @error('blog_category_id')
              <div class="text-red-600">{{ $message }}</div>
          @enderror
      </div>

        <div class="mb-6">
            <label for="body" class="block mb-2 text-xl font-medium text-gray-900">Body</label>
            <textarea id="myeditorinstance" name="body" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">{{ old('body') }}</textarea>
            @error('body')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="image" class="block mb-2 text-xl font-medium text-gray-900">Image</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5">
            @error('image')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex justify-end items-end mt-4">
            <button type="submit" class="text-white bg-[#DD2120] font-bold hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-lg px-10 py-2.5 text-center">Submit</button>
        </div>

    </form>
</div>
