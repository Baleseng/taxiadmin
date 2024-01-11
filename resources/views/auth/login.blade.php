@extends('layouts.auth')

@section('title', 'Log in')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        
        <div class="m-b-md">
          <div class="logo">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/logo/signageadmin.svg') }}"/></a>
          </div>
        </div>

        <div class="reg-col-container row"> 
            <div class="reg-col-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

            @isset($url)
            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
            @else
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @endisset
            @csrf
            <div class="input">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label class="container" for="remember">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>{{ __('Remember Me') }}</span>
                </label>
                           
                <div class="form-btn-wrap">
                    <button type="submit" class="primarybtn">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>

                <div class="reg-user-agreement">By SIGNING IN, you agree to our <a href="">Terms, Data Policy and Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</div>

                <div class="reg-user-btn"><a href="">Register</a></div>

            </form>
        </div>
    </div>
</div>
</div>

@endsection
