@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h1 class="h3 mb-3 font-weight-normal text-center">Please login</h1>
            <form action="/login" method="post">
                @csrf
                <label for="email" class="sr-only">Email address</label>
                <input type="email" name="email" id="email"
                    class="form-control mt-2 @error('email') is-invalid @enderror" placeholder="Email address" required
                    autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="password" class="sr-only mt-3">Password</label>

                <input type="password" name="password" id="password" class="form-control mt-2" placeholder="Password"
                    required>
                <button class="w-100 btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>


            </form>
            <small class="d-block text-center mt-2">Not registered? <a href="/register">Register Now!</a></small>
            <p class="mt-4 mb-3 text-muted">&copy; TeddyFirman</p>
        </div>
    </div>
@endsection
