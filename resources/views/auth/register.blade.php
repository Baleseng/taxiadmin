@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        
        <div class="m-b-md">
          <div class="logo">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/logo/signageadmin.svg') }}"/></a>
          </div>
        </div>

        <div class="reg-col-container row"> 
            <div class="reg-col-header">  {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>
        
            <div class="card-body">
                @isset($url)
                <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                @else
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @endisset
                @csrf

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedbacks" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                    <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Mobile">
                    @error('email')
                    <span class="invalid-feedbacks" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                                        
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                    <div class="reg-user-agreement">By SIGNING UP, you agree to our <a href="">Terms, Data Policy and Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</div>

                     <div class="form-btn-wrap">
                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection
