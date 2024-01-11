<div class="user_hover_wrapper">

  <div class="user_hover_btn">
    <div class="user_hover_img">
      <img class="fa fa-user-circle" src="{{ URL::asset('images/profile/users/') }}">
    </div>
  </div>  

  <div id="user_hover_show">
    <a class="user_hover_name" href="{{ url($url.'/profile/'.Auth::user()->id.'-'.str_replace(' ', '-',Auth::user()->name)) }}"> 
      @guest 
      @else {{ Auth::user()->name }}
      @endguest
    </a>
  </div>

</div>

<div class="dropdown2">
  <span class="dropbtn2 fa fa-th"></span>
  <div id="m4" class="dropdown2-content arrow_app">

    <div class="app-block">
      <a href="{{ url('/admin/pages') }}" class="app-link"><i class="fa fa-bus-alt"></i> <b>Add Page</b></a>
    </div>
    
    <div class="app-block">
      <a href="{{ url('/admin/taxis') }}" class="app-link"><i class="fa fa-bus-alt"></i> <b>Taxis</b></a>
    </div>

    <div class="app-block">
      <a href="{{ url('/admin/routes') }}" class="app-link"><i class="fa fa-map-marked-alt"></i> <b>Routes</b></a>
    </div>

    <div class="app-block">
      <a href="{{ url('/admin/drivers') }}" class="app-link"><i class="fa fa-taxi"></i> <b>Drivers</b></a>
    </div>

    <div class="app-block">
      <a href="{{ url('/admin/marshall') }}" class="app-link"><i class="fa fa-user-edit"></i> <b>Marshall</b></a> 
    </div>

    <div class="app-block"> 
      <a href="{{ url('/admin/owners') }}" class="app-link"><i class="fa fa-users"></i> <b>Owners</b></a> 
    </div>

    <div class="app-block">
      <a href="{{ url('/admin/chairman') }}" class="app-link"><i class="fa fa-user-tie"></i> <b>Chairman</b></a> 
    </div>

  </div>

  <span class="dropbtn2 fa fa-gear"></span>

  <div id="m5" class="dropdown2-content arrow_setting">
    <span class="setting-btn-row"><a href=""><i class="fa fa-user"></i> Edit Your Profile</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-camera"></i> Upload Profile Picture</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-file-text"></i> Create / Manage Page</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-expeditedssl"></i> Security / Privacy</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-connectdevelop"></i> Setting A.I</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-bell-o"></i> Setting Notification</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-envelope-open-o"></i> Setting Message</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-user-plus"></i> Setting Requests</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-sitemap"></i> Sitemap</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-dashcube"></i> Feedback</a></span>
    <span class="setting-btn-row"><a href=""><i class="fa fa-question-circle-o"></i> Help</a></span>
    <span class="setting-btn-row">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off"></i>{{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </span>    
  </div>

</div>
