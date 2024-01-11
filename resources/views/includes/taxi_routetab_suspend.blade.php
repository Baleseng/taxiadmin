<div class="admin-dashboard-chart tabClass" id="btnSuspend" style="display:none;">
  <div class="admin-wrap-article">
    <div class="table_head_row">
      <div class="table_head_title">Model</div>
      <div class="table_head_stats">Registration</div>
      <div class="table_head_stats">Association</div>
      <div class="table_head_stats">Status</div>
      <div class="table_head_stats">Reason</div>
      <div class="table_head_stats"></div>
    </div>

    @foreach ($suspend as $taxi)
    <div class="table_row row">
      <div class="table_title"> {{ $taxi->model }} </div>
      <div class="table_stats"><b><a href="{{ url($url.'/taxi/'.$taxi->id . '-' . str_replace(' ', '-', $taxi->registration)) }}"> {{ $taxi->registration }} </a></b></div>
      <div class="table_stats"> {{ $taxi->association }} </div>
      <div class="table_stats"> {{ $taxi->status }} </div>    
      
      <div class="table_hover"> 
        <div class="table-box">VIEW</div>  
        <div class="table-box-name"> {{ $taxi->reason }} </div>  
      </div> 

      <div class="table_stats">
        <a href="{{ url($url.'/edit/'.$taxi->id . '-' . str_replace(' ', '-', $taxi->registration)) }}">Edit</a>
      </div>
      
      <div class="dropdown2">
        <span class="dropbtn2 fa fa-ellipsis-v"></span>
        <div id="m5" class="dropdown2-content">

          <div class="index-btn-row">
            <a href=""><i class="fa fa-taxi"></i>Driver</a>
          </div>
          <div class="index-btn-row">
            <a href=""><i class="fa fa-users"></i>Owner</a>
          </div>
          <div class="index-btn-row">
            <a href=""><i class="fa fa-eye"></i>Est. Income</a>
          </div>
          <div class="index-btn-row">
            <a href=""><i class="fa fa-map-marked-alt"></i>Routes</a>
          </div>
          
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>