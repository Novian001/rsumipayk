@extends('layouts.main')

@section('container')
    <div class="container h-full">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="my-3 text-center">{{ $title }}</h1>
                @foreach($doctors as $doctor)
                    @if($doctor->image)
                        <img src="{{ asset('storage/' . $doctor->image) }}" class="card-img-top img-fluid" alt="...">
                    @else
                        <img src="https://source.unsplash.com/1200x400?list" class="card-img-top img-fluid" alt="...">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection