<div class="app-heading-wrapper">
          <div class="app-heading-container">
            <div class="app-heading-col">
              <a href="{{ url($url.'/') }}" class="app-heading-cog">
                <i class="fa fa-chevron-left"></i>
              </a>
            </div>
            <div class="app-heading-col">
              <span class="app-heading">Search</span>
            </div>
          </div>
        </div>

        <div class="app-bottom-nav-btn">
          <div class="app-bottom-nav-icon">

            <div class="app-hover-wrapper">
              <div class="app-hover-btn">
                <div class="app-hover-img">
                  <a href="{{ url('marshall') }}" class="app-hover-inactive"> 
                    <img class="fa fa-user" src="">
                  </a>
                </div>
              </div>
              <div id="app-hover-show">Profile</div>
            </div>

            <div class="app-hover-wrapper">  
              <div class="app-hover-btn">
                <div class="app-hover-img">
                  <a href="{{ url('marshall/search') }}" class="app-hover-active"> 
                    <i class="fa fa-search"></i>
                  </a>
                </div>
              </div>
              <div id="app-hover-show">Search</div>
            </div>

            <div class="app-hover-wrapper">  
              <div class="app-hover-btn">
                <div class="app-hover-img">
                  <a href="{{ url('marshall/call') }}" class="app-hover-inactive"> 
                    <i class="fa fa-phone"></i>
                  </a>
                </div>
              </div>
              <div id="app-hover-show">Call</div>
            </div>

            <div class="app-hover-wrapper">  
              <div class="app-hover-btn">
                <div class="app-hover-img">
                  <a href="{{ url('marshall/routes') }}" class="app-hover-inactive"> 
                    <i class="fa fa-map-marker"></i>
                  </a>
                </div>
              </div>
              <div id="app-hover-show">Routes</div>
            </div>