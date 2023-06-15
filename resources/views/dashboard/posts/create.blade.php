@extends('dashboard.layouts.main')

@section('container')
<div class="flex justify-between items-center">
    <h1 class="text-3xl font-bold">New Posts</h1>
    <button type="submit" form="create-post-form" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75 mt-4">Create Post</button>
</div>

<div>
    <form id="create-post-form" action="/dashboard/posts" method="POST" class="mt-6 p-2" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-4">
            <div class="flex-1 shadow">
                <input type="text" name="title" id="title" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300 @error('title') is-invalid @enderror" placeholder="Title" required autofocus value="{{ old('title') }}">
                @error('title')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1 shadow">
                <input type="text" name="slug" id="slug" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300 @error('slug') is-invalid @enderror" placeholder="Slug" required value="{{ old('slug') }}">
                @error('slug')
                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1 shadow">
                <select name="category_id" id="category_id" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300 @error('category') is-invalid @enderror">
                    <option value="">-- Category --</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
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
                    <div class="grid grid-cols-5 gap-4">
                        <img class="col-span-5 " id="image-preview">
                    </div>
                    <input type="file" name="image" id="image" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300" accept="image/*" onchange="priviewImage()">
                    @error('image')
                        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex-1 shadow p-2 rounded-md">
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor class="w-full mx-auto min-h-screen p-5 text-black bg-white py-3 px-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300 @error('body') is-invalid @enderror" input="body"></trix-editor>
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