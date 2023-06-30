@extends('layouts.main')

@section('container')

    <div class="h-screen row justify-content-center">
        <div class="col-md-4">
            <form action="/register" method="POST" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your name" required autocomplete="off" autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter your username" required autocomplete="off" autofocus value="{{ old('username') }}">
                    @error('username')
                    <label for="username" class="form-label">Username</label>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autocomplete="off" autofocus value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required autocomplete="off">
                </div>
                <button type="submit" class="w-100 btn btn-primary">Login</button>
            </form>
            
            @if(session()->has('login'))
                <small class="mt-3 text-center d-block">Have account? <a href="/login">login Now!</a></small>
            @endif
        </div>
    </div>

@endsection