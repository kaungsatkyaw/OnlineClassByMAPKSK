@extends('layouts.website')

@section('content')
    @include('include.header')

    <br>
<div style="text-align: center;" class="row justify-content-center">
    <div class="login_form1">
        <div>
            <h4>{{__('Login into account')}}</h4>
            <p class="mb-10">Use your credentials to access your account.</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-envelope fa-2x"></i>
                        </span>
                    </div>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" style="border-left: 0 !important;" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
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
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" style="border-left: 0 !important;border-right: 0 !important;" required autocomplete="current-password">
                
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
            <div class="row mt-6 mb-6">
                <div class="col-6 d-flex align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label"  style="color:hsl(0deg 0% 69%);" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-6 text-right">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </div>
            <div style="margin-top: 20px;">
                <button class="btn btn-block" style="background: #f6783a;color:#fff;">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
