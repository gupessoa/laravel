@extends('auth.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                    </div>
                    <div class="card-body">
                        <div class="row d-flex flex-column text-center">
                            <img src="" alt="GustavoPessoa" class="mb-5 mt-5">
                            <h5 class="card-title text-center">Log In</h5>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="bmd-form-group">
                                <div class="input-group mb-3 mt-4">
                                    <div class="input-group-prepend">
                                        <p class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </p>
                                    </div>
                                    <input type="email" name="email" id="" class="form-control" placeholder="E-mail" spellcheck="false" data-ms-editor="true">
                                    @error('email')
                                        <span class="invalid-feedback is-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <p class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </p>
                                    </div>
                                    <input type="password" name="password" id="" class="form-control" placeholder="E-mail" spellcheck="false" data-ms-editor="true">
                                </div>
                            </div>
                            <div class="card-footer justify-content-center flex-column">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase mt-5" type="submit">LogIn</button>
                                <a class="d-block mt-2 small mb-5" href="{{ route('password.request') }}">Forgot Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
