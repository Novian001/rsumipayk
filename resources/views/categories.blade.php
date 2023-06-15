@extends('layouts.main')

@section('container')
    <h2>Halaman Blog categories</h2>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-2">
                <a href="/posts?categories={{ $category->slug }}">
                    <div class="card text-white card-category">
                        <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex flex-fill align-items-center justify-content-center" style="width: 100%">
                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>        
@endsection