@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" id="name"
                            class="form-control mt-2 @error('name') is-invalid @enderror" placeholder="Name" required
                            value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" id="username"
                            class="form-control mt-2 @error('username') is-invalid @enderror" placeholder="Username"
                            required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" id="email"
                            class="form-control mt-2 @error('email') is-invalid @enderror" placeholder="Email address"
                            required value="{{ old('email') }}">
                        <label for="email">Email
                            address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" id="password"
                            class="form-control mt-2 @error('password') is-invalid @enderror" placeholder="Password"
                            required>

                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <button class="w-100 btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>


                </form>
                <small class="d-block text-center mt-2">Already registered? <a href="/login">Login</a></small>
                <p class="mt-4 mb-3 text-muted">&copy; TeddyFirman</p>
            </main>
        </div>
    </div>
@endsection
