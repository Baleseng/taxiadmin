@extends('layouts.driver')

@section('content')

<div class="setting-col">
 <div class="setting-btn-row"><a href=""><i class="fa fa-user"></i> {{ __('Edit Your Profile') }}</a></div>
 <div class="setting-btn-row"><a href=""><i class="fa fa-camera"></i> Upload Profile Picture</a></div>
 <div class="setting-btn-row"><a href=""><i class="fa fa-expeditedssl"></i> Security / Privacy</a></div>
 <div class="setting-btn-row"><a href=""><i class="fa fa-bell-o"></i> Setting Notification</a></div>
 <div class="setting-btn-row"><a href=""><i class="fa fa-envelope-open-o"></i> Setting Message</a></div>
 <div class="setting-btn-row"><a href=""><i class="fa fa-user-plus"></i> Setting Requests</a></div>
 <div class="setting-btn-row"><a href=""><i class="fa fa-question-circle-o"></i> Help</a></div>
 <div class="setting-btn-row">
  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
   <i class="fa fa-power-off"></i> {{ __('Logout') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
 </div>    
</div>

@endsection