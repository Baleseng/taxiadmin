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
                        <form method="POST" action="{{ url('owner/'.$taxi->id) }}">
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
                                <label>Seater:</label> 
                                <span><input type="text" value="{{ $taxi->seater }}" name="seater"></span>
                            </div>

                            <div class="admin-profile-interest">
                            <i class="fa fa-"></i> 
                            <b>Status</b> 
                            <span class="{{ $taxi->status }}">: {{ $taxi->status }} </span>
                            </div>
                            <input type="hidden" value="{{ Auth::user()->id }}" name="owner_id"/>
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
            </div>
            
        </div>

@endsection