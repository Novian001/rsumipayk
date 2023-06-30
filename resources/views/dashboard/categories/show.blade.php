@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <div class="flex gap-2 my-2">
                    <div class="flex items-center justify-center px-3 py-2 bg-green-600 rounded">
                        <a href="/dashboard/posts" class="flex items-center text-white"><span class="feather" data-feather="arrow-left"></span>Back to all my posts</a>
                    </div>
                    <div class="flex items-center justify-center px-3 py-2 bg-yellow-400 rounded">
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="flex items-center text-slate-800"><span class="feather" data-feather="edit"></span>Edit</a>
                    </div>
                    <div class="flex items-center justify-center px-3 py-2 bg-red-600 rounded">
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="inline-block">
                    @method('delete')
                        @csrf
                        <button class="flex items-center text-white" onclick="return confirm('Are you sure?')">
                            <span class="feather" data-feather="x-circle"></span>
                            Delete
                        </button>
                    </form>
                    </div>
                </div>
                <h5><a href="/authors/{{ $post->author->username }}"class="text-decoration-none" >{{ $post->author->name }}</a> in <a href="/posts?categories={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></h5>

                @if($post->image)
                    <div class="flex justify-start overflow-hidden max-h-96">
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