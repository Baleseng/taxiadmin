<div class="index-dashboard-widget">
    <div class="index-dashboard-card">
      
      <div class="index-dashboard-heading">
        <div class="view-index-btn-block">
          <a href="{{ url($url.'/') }}" class="page-btn">Parked</a>
          <a href="{{ url($url.'/suspended') }}" class="page-btn active-tab">Suspended</a>
        </div>
        <div class="view-results-block">  
          <h2>0</h2> 
        </div>
      </div>

      <div class="index-dashboard-card">
        <div class="index-wrap-off-taxi">

          <div class="table_head_row">
            <div class="table_head_title">Model</div>
            <div class="table_head_stats">Registration</div>
            <div class="table_head_stats">Association</div>
          </div>

          @foreach ($off as $taxi)
            <div class="table_row row">
              <div class="table_title"> {{ $taxi->model }} </div>
              <div class="table_stats"><b><a href="{{ url($url.'/taxi/'.$taxi->id . '-' . str_replace(' ', '-', $taxi->registration)) }}"> {{ $taxi->registration }} </a></b></div>
              <div class="table_stats"> {{ $taxi->association }} </div>
            
              <div class="dropdown2">
                <span class="dropbtn2 fa fa-ellipsis-v"></span>
                <div id="m5" class="dropdown2-content">
                
                <div class="index-btn-row">
                  <a href="">
                  <i class="fa fa-taxi"></i>Driver</a>
                </div>

                <div class="index-btn-row">
                  <a href="">
                  <i class="fa fa-users"></i>Owner</a>
                </div>

                <div class="index-btn-row">
                  <a href="">
                    <i class="fa fa-eye"></i>Est. Income
                  </a>
                </div>

                <div class="index-btn-row">
                  <a href="">
                    <i class="fa fa-map-marked-alt"></i>Routes
                  </a>
                </div>

                <div class="index-btn-row">
                  <a href="{{ url('marshall/edit/'.$taxi->id )}}">
                  <i class="fa fa-edit"></i>Edit</a>
                </div>

                <div class="index-btn-row">
                  <form method="POST" action="{{ url('/marshall/edit/'.$taxi->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit"><i class="fa fa-trash"></i>Archive</button>  
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          @endforeach



        </div>
      </div> 
      
    </div>
  </div>