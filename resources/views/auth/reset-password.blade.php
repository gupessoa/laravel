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
                            <img src="" alt="GustavoPessoa" class="mb-5 mt-5">
                            <h5 class="card-title text-center">Reset Your Password</h5>
                        </div>
                        <form class="form-signin" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <input type="email" name="email" id="inputEmail" class="form-control" value="{{ $request->email }}" required>
                                <label for="inputEmail">Email address</label>
                                @error('email')
                                <span class="invalid-feedback is-invalid" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                            <button class="btn btn-lg btn-primary btn-block text-uppercase mt-5" type="submit">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


