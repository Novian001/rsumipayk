@extends('dashboard.layouts.main')

@section('container')
<div class="flex justify-between items-center">
    <h1 class="text-3xl font-bold">Edit Posts</h1>
    <button type="submit" form="update-post-form" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75 mt-4">Update Post</button>
</div>

<div>
    <form id="update-post-form" action="/dashboard/posts/{{ $post->slug }}" method="POST" class="mt-6 p-2" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex flex-col gap-4">
            <div class="flex-1">
                <input type="text" name="title" id="title" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300" placeholder="Title" required autofocus value="{{ old('title', $post->title) }}">
                @error('title')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1">
                <input type="text" name="slug" id="slug" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300" placeholder="Slug" required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1">
                <select name="category_id" id="category_id" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300">
                    <option value="">-- Category --</option>
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1 shadow rounded-md">            
                <div class="mb-4 bg-white p-2 rounded-md">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="mb-4 object-cover object-center rounded-md" id="image-preview" style="width: 300px; height: 200px">
                    @elseif($post->category)
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" id="image-preview" class="mb-4 object-cover object-center rounded-md" style="width: 300px; height: 200px">
                    @else
                        <div class="grid grid-cols-5 gap-4">
                            <img class="col-span-5" id="image-preview">
                        </div>
                    @endif

                    <input type="file" name="image" id="image" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300" accept="image/*" onchange="priviewImage()">
                    @error('image')
                        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex-1">
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor class="w-full mx-auto min-h-screenp-5 text-black bg-white py-3 px-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300" input="body"></trix-editor>
                @error('body')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection