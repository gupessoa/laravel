@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                    </div>
                    <div class="card-body">
                        <div class="row d-flex flex-column text-center">
                            <img src="" alt="GustavoPessoa" class="mb-3">
                            <h5 class="card-title text-center">Log In</h5>
                        </div>
                        <form class="form-signin" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" name="name" id="inputUserame" class="form-control" placeholder="Name" required autofocus>
                                <label for="inputUserame">Name</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                <label for="inputEmail">Email address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr>

                            <div class="form-label-group">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="password_confirmation" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                                <label for="inputConfirmPassword">Confirm password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                            <a class="d-block text-center mt-2 small" href="{{ route('login') }}">Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
