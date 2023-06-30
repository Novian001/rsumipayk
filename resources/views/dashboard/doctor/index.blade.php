@extends('dashboard.layouts.main')

@section('container')
    <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold">New Jadwal</h1>
        <button type="submit" form="create-post-form" class="px-4 py-2 mt-4 font-bold text-white bg-indigo-500 rounded shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Create Jadwal</button>
    </div>
    <form id="create-post-form" action="/dashboard/doctors" method="POST" class="p-2 mt-6" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex-1 rounded-md shadow">            
            @foreach ($doctors as $doctor)
                <div class="p-2 mb-4 bg-white rounded-md">
                <label for="image" class="block mb-2 text-sm font-bold text-gray-700">Image:</label>
                <input type="hidden" name="oldImage" value="{{ $doctor->image }}">
                    @if($doctor->image)
                        <img src="{{ asset('storage/' . $doctor->image) }}" class="object-cover object-center mb-4 rounded-md" id="image-preview" style="width: 300px; height: 200px">
                    @elseif($doctor->category)
                        <img src="https://source.unsplash.com/1200x400?list" id="image-preview" class="object-cover object-center mb-4 rounded-md" style="width: 300px; height: 200px">
                    @else
                        <div class="grid grid-cols-5 gap-4">
                            <img class="col-span-5" id="image-preview">
                        </div>
                    @endif
                    <input type="file" name="image" id="image" class="w-full px-2 py-3 bg-white border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" accept="image/*" onchange="priviewImage()">
                    @error('image')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            @endforeach
        </div>
    </form>

    <form action="/dashboard/posts/{{ $doctors->id }}" method="POST" class="border-0">
        @method('delete')
        @csrf
        <button tabindex="0" class="w-full py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white" onclick="return confirm('are you sure?')">Delete</button>
    </form>
@endsection