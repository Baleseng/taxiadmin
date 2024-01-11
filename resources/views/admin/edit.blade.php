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
                        <form method="POST" action="{{ url('admin/'.$taxi->id) }}" id="reasonInput">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                            <div class="admin-profile-interest">
                                <label>Registration:</label> 
                                <span><input type="text" value="{{ $taxi->registration }}" name="registration"></span>
                            </div>
                            <div class="admin-profile-interest">
                                <label>Model:</label> 
                                <span><input type="text" value="{{ $taxi->model }}" name="model"></span>
                            </div>

                            <div class="admin-profile-interest">
                                <label>Status:</label> 
                                <span>
                                    <select name="status" onchange="showHide(this)">
                                        <option value="route">On Route</option>
                                        <option value="queue">Queue</option>
                                        <option value="suspend">Suspended</option>
                                        <option value="archived">Archived</option>
                                        
                                    </select>
                                </span>
                            </div>

                
                            
                            <div class="show-hide" id="suspend">
                                <label>Reasons:</label>
                                <input list="browsers" name="reason">
                                <datalist id="browsers">
                                    <option value="Passengers Complained Taxi">
                                    <option value="Traffic Tines">
                                    <option value="Passengers Complained Driver">
                                </datalist>
                            </div>

                            <div class="show-hide" id="archived">
                                <label>Reasons:</label>
                                <span>
                                    <select name="reason">
                                        <option value="Removed Disc">Removed Disc</option>
                                        <option value="Unpaid Fines">Unpaid Fines</option>
                                        <option value="Written Off">Written Off</option>
                                    </select>
                                </span>
                            </div>
                            

                            <input type="hidden" value="{{ Auth::user()->id }}" name="admin_id"/>
                            <button type="submit" class="addedit-submitbtn">Update</button> 
                        </form>

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
                            <span> :  {{ $taxi->driver }}</span>
                        </div>
                        <div class="admin-profile-li">
                            <b>Owner</b> 
                            <span>: {{ $taxi->owner }}</span>
                        </div>
                        <div class="admin-profile-li">
                            <b>Association</b> 
                            <span>: {{ $taxi->association }}</span>
                        </div>
                    </div>
                </div>
                <div class="admin-profile-col-3"><div id="container-gauge"></div></div>
            </div>
             <div class="admin-profile-row row">

                <div class="admin-profile-col-1"> 
                    <div class="admin-dashboard-heading">
                        <div class="view-content-btn-block row">
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
            function showHide(elem) {
                if(elem.selectedIndex !== 0) {
                     //hide the divs
                     for(var i=0; i < divsO.length; i++) {
                         divsO[i].style.display = 'none';
                    }
                    //unhide the selected div
                    document.getElementById(elem.value).style.display = 'block';
                }
            }
             
            window.onload=function() {
                //get the divs to show/hide
                divsO = document.getElementById("reasonInput").getElementsByClassName('show-hide');
            };
        </script>

@endsection