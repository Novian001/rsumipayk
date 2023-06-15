@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <div class="flex gap-2 my-2">
                    <div class="bg-green-600 rounded py-2 px-3 flex justify-center items-center">
                        <a href="/dashboard/posts" class="flex items-center text-white"><span class="feather" data-feather="arrow-left"></span>Back to all my posts</a>
                    </div>
                    <div class="bg-yellow-400 rounded py-2 px-3 flex justify-center items-center">
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-slate-800 flex items-center"><span class="feather" data-feather="edit"></span>Edit</a>
                    </div>
                    <div class="bg-red-600 rounded py-2 px-3 flex justify-center items-center">
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="inline-block">
                    @method('delete')
                        @csrf
                        <button class="text-white flex items-center" onclick="return confirm('Are you sure?')">
                            <span class="feather" data-feather="x-circle"></span>
                            Delete
                        </button>
                    </form>
                    </div>
                </div>
                <h5><a href="/authors/{{ $post->author->username }}"class="text-decoration-none" >{{ $post->author->name }}</a> in <a href="/posts?categories={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></h5>

                @if($post->image)
                    <div class="overflow-hidden max-h-96 flex justify-start">
                        <img src="{{ asset('storage/' . $post->image) }}" class="object-cover card-img-top img-fluid" alt="...">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="...">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts">Back to blog</a>
            </div>
        </div>
    </div>
@endsection