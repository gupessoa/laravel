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
                            <h5 class="card-title text-center">Verify Your Email</h5>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                            <div class="card-footer justify-content-center flex-column">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase mt-5" type="submit">Resend E-mail</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

