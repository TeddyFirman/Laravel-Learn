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

            <h1 class="h3 mb-3 font-weight-normal text-center">Please login</h1>
            <form>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control mt-2" placeholder="Email address" required
                    autofocus>
                <label for="inputPassword" class="sr-only mt-3">Password</label>
                <input type="password" id="inputPassword" class="form-control mt-2" placeholder="Password" required>
                <button class="w-100 btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>


            </form>
            <small class="d-block text-center mt-2">Not registered? <a href="/register">Register Now!</a></small>
            <p class="mt-4 mb-3 text-muted">&copy; TeddyFirman</p>
        </div>
    </div>
@endsection
