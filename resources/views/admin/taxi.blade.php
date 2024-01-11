@extends('layouts.main')

@section('description', '')
@section('keywords', '')

@section('title', 'Admin | Taxi')

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
        <div class="admin-profile-container">
            
            <div class="admin-profile-row row">
                <div class="admin-profile-col-4">
                    <div class="admin-profile-img">
                        <img class="fa fa-bus" src="" >
                    </div>
                </div>
                <div class="admin-profile-col-4">
                    <div class="admin-profile-name">
                        <h1>{{ $taxi->registration }}</h1>
                        <div class="admin-profile-interest">
                            <b>Model</b> 
                            <span>: {{ $taxi->model }} </span>
                        </div>

                        <div class="admin-profile-interest">
                            <b>Status</b> 
                            <span class="{{ $taxi->status }}">: {{ $taxi->status }} </span>
                        </div>

                        <div class="admin-profile-title">
                            <div class="admin-profile-border"></div>
                            <div class="admin-profile-h5">Taxi Perfomance Ranking</div>
                        </div>

                        <span class="ranking-number">0.0</span>
                        <div class="admin-profile-raking">
                            <i class="ranked fa fa-star-o"></i>
                            <i class="ranked fa fa-star-o"></i>
                            <i class="ranked fa fa-star-o"></i>
                            <i class="ranked fa fa-star-o"></i>
                            <i class="ranked fa fa-star-o"></i>
                        </div>
                    </div>

                    <div class="admin-profile-info">
                        <div class="admin-profile-title">
                            <div class="admin-profile-border"></div>
                            <div class="admin-profile-h5">Info</div>
                        </div>
                        <div class="admin-profile-li">
                            <b>Driver</b> 
                            <span> :  {{ $taxi->driver_id }}</span>
                        </div>
                        <div class="admin-profile-li">
                            <b>Owner</b> 
                            <span>: {{ $taxi->owner_id }}</span>
                        </div>
                        <div class="admin-profile-li">
                            <b>Association</b> 
                            <span id="demo">: {{ $taxi->association }}</span>
                        </div>
                    </div>
                </div>
                <div class="admin-profile-col-3"><div id="container-gauge"></div></div>
            </div>
             <div class="admin-profile-row row">

                <div class="admin-profile-col-1"> 
                    <div class="admin-dashboard-heading">
                        <div class="view-button-block row">
                            <button class="page-btn" onclick="openCity('btnweekly')">Weekly</button>
                            <button class="page-btn active" onclick="openCity('btnmonthly')">Monthly</button>
                        </div>
                    </div>
        
                    <div id="btnweekly" class="chart">
                        <div id="container-weekly"></div>
                    </div>
                    <div id="btnmonthly" class="chart" style="display:none;">
                        <div id="container-monthly"></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function openCity(chartName) {
              let i;
              let x = document.getElementsByClassName("chart");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              document.getElementById(chartName).style.display = "block";
            }
        </script>

        <script>
            let text = document.getElementById("demo").innerHTML; 
            document.getElementById("demo").innerHTML = text.replace("JTTA", "Johannesburg Tembisa Taxi Association");
        </script>


@endsection