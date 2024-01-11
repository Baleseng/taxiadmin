<div class="app-bottom-nav-btn">
  <div class="app-bottom-nav-icon">

    <div class="app-hover-wrapper">
      <div class="app-hover-btn">
        <div class="app-hover-link">
          <a href="{{ url($url) }}"> 
            <img class="fa fa-bus" src="">
            <span class="app-hover-text">Taxis</span>
          </a>
        </div>
      </div>
    </div>

    <div class="app-hover-wrapper">  
      <div class="app-hover-btn">
        <div class="app-hover-link">
          <a href="{{ url($url.'/search') }}"> 
            <i class="fa fa-search"></i>
            <span class="app-hover-text">Search</span>
          </a>
        </div>
      </div>
    </div>

    <div class="app-hover-wrapper">  
      <div class="app-hover-btn">
        <div class="app-hover-link">
          <a href="{{ url($url.'/calls') }}"> 
            <i class="fa fa-phone"></i>
            <span class="app-hover-text">Call</span>
          </a>
        </div>
      </div>
    </div>

    <div class="app-hover-wrapper">  
      <div class="app-hover-btn">
        <div class="app-hover-link">
          <a href="{{ url($url.'/routes') }}" class="active"> 
            <i class="fa fa-map-marker"></i>
            <span class="app-hover-text">Routes</span>
          </a>
        </div>
      </div>
    </div>

    <div class="app-hover-wrapper">  
      <div class="app-hover-btn">
        <div class="app-hover-link">
          <a href="{{ url($url.'/settings') }}"> 
            <i class="fa fa-cog"></i>
            <span class="app-hover-text">Settings</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>