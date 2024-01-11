<div class="admin-dashboard-chart tabClass" id="btnUnassign" style="display:none;">
  <div class="admin-wrap-article">
    <div class="table_head_row">
      <div class="table_head_title">Model</div>
      <div class="table_head_stats">Registration</div>
      <div class="table_head_stats">Association</div>
      <div class="table_head_stats">Status</div>
    </div>

    @foreach ($unassign as $taxi)
    <div class="table_row row">
      <div class="table_title"> {{ $taxi->model }} </div>
      <div class="table_stats"><b><a href="{{ url($url.'/taxi/'.$taxi->id . '-' . str_replace(' ', '-', $taxi->registration)) }}"> {{ $taxi->registration }} </a></b></div>
      <div class="table_stats"> {{ $taxi->association }} </div>
      <div class="table_stats"> {{ $taxi->status }} </div>    
      <div class="table_stats"> <a href="{{ url($url.'/edit/'.$taxi->id . '-' . str_replace(' ', '-', $taxi->registration)) }}">Edit</a> </div>
    </div>
    @endforeach
  </div>
</div>