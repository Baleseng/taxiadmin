<div class="admin-dashboard-widget">
  <div class="admin-dashboard-col-3">
    
    <div class="admin-dashboard-heading">
      <div class="view-results-block">  
        <h2>0</h2> 
      </div>
      <div class="view-button-block row">
        <button class="page-btn active" onclick="tabBtn('btnParked')">Queue</button>
        <button class="page-btn" onclick="tabBtn('btnSuspend')">Suspended</button>
        <button class="page-btn" onclick="tabBtn('btnArchived')">Archived</button>
        <button class="page-btn" onclick="tabBtn('btnUnassign')">Unassign</button>
      </div>
    </div>

    @include('includes.taxi_routetab_queue')
    @include('includes.taxi_routetab_suspend')
    @include('includes.taxi_routetab_archived')
    @include('includes.taxi_routetab_unassign')

  </div>
</div>