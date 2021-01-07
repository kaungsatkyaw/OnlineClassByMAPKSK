@extends('layouts.website')

@section('content')
    @include('include.header')

    <br>
    <div style="text-align: center;" class="row justify-content-center">
        <div class="login_form1">
            <div>
                <h4>Create account</h4>
                <p class="mb-10">Setup a new account in a minute.</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-user fa-2x"></i>
                            </span>
                        </div>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" style="border-left: 0 !important;" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-envelope fa-2x"></i>
                            </span>
                        </div>
                        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" style="border-left: 0 !important;" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock fa-2x"></i>
                            </span>
                        </div>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" style="border-left: 0 !important;border-right: 0 !important;" required autocomplete="new-password">

                        <div class="input-group-append cursor-pointer" style="margin-left: -1px;">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-key fa-2x"></i>
                            </span>
                        </div>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Password" style="border-left: 0 !important;border-right: 0 !important;" required autocomplete="new-password">
                        <div class="input-group-append cursor-pointer" style="margin-left: -1px;">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px;">
                    <button class="btn btn-block" style="background: #f6783a;color:#fff;">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
