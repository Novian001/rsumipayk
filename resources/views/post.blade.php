@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <h5><a href="/authors/{{ $post->author->username }}"class="text-decoration-none" >{{ $post->author->name }}</a> in <a href="/posts?categories={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></h5>
                @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="...">
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