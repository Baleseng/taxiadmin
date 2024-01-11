@extends('layouts.main')

@section('description', '')
@section('keywords', '')

@section('title', 'Owner')


@section('searchfield')
  @include('includes.admin_header_search')
@endsection

@section('menubutton')
  @include('includes.admin_header_section_button')
@endsection

@section('content')
  @if (session('status'))
    {{ session('status') }}
  @endif

  <div class="admin-dashboard-default-container"> 
    @include('includes.taxi_route_on')
    @include('includes.taxi_route_status')
    @include('includes.taxi_chart_revenue')  
  </div>

  <script type="text/javascript">
  function tabBtn(tabId) {
    var i;
    var x = document.getElementsByClassName("tabClass");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    document.getElementById(tabId).style.display = "block";
  }
</script>  
  
@endsection