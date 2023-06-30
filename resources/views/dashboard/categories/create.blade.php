@extends('dashboard.layouts.main')

@section('container')
    <div class="flex items-center justify-between">
    <h1 class="text-3xl font-bold">New Category</h1>
    <button type="submit" form="create-post-form" class="px-4 py-2 mt-4 font-bold text-white bg-indigo-500 rounded shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Create Category</button>
</div>

<div>
    <form id="create-post-form" action="/dashboard/categories" method="POST" class="p-2 mt-6" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-4">
            <div class="flex-1 shadow">
                <input type="text" name="name" id="name" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300 @error('name') is-invalid @enderror" placeholder="Name" required autofocus value="{{ old('name') }}">
                @error('name')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1 shadow">
                <input type="text" name="slug" id="slug" class="bg-white py-3 px-2 w-full focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent rounded-md shadow-sm border-gray-300 @error('slug') is-invalid @enderror" placeholder="Slug" required value="{{ old('slug') }}">
                @error('slug')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection