@extends('layouts.auth')

@section('title', 'Log in')

@section('content')
    <div class="flex-center position-ref full-height">
      <div class="content">
        
        <div class="m-b-md">
          <div class="logo">
            <img src="{{ url('images/logo/signageadmin.svg') }}"/>
          </div>
        </div>

        <div class="links">
          <a href="{{ url('login/owner') }}">Owner</a>

          <span class="separetor"></span>
          <a href="{{ url('login/chairman') }}">Chairman</a>
            
          <span class="separetor"></span>
          <a href="{{ url('login/admin') }}">Admin</a>
            
          <span class="separetor"></span>
          <a href="{{ url('login/marshall') }}">Marshall</a>
            
          <span class="separetor"></span>
          <a href="{{ url('login/driver') }}">Driver</a>
        </div>

      </div>
    </div>
  </body>
@endsection