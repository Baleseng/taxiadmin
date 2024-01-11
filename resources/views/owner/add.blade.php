@extends('layouts.main')

@section('description', '')
@section('keywords', '')

@section('title', 'Owner | Add')


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
          <form method="POST" action="{{ url('owner')}}">
          {{ csrf_field() }}

            <div class="admin-profile-interest">
              <label>Taxi Model:</label>
              <input type="text" value="{{ $taxi->model }}" name="model"/>
              <span class="errorLabel"></span>
            </div>
            <div class="admin-profile-interest">
                <label>Registration:</label>
                <input type="text" value="{{ $taxi->registration }}" name="registration"/>
                <span class="errorLabel"></span>
            </div>

            <div class="admin-profile-interest">
                <label>Seater:</label>
                  <input type="text" value="{{ $taxi->seater }}" name="seater"/>
                  <span class="errorLabel"></span>
            </div>

            <input type="hidden" value="{{ Auth::user()->id }}" name="owner_id"/>
            <input type="hidden" value="unassigned" name="status"/>
            <button type="submit" class="addedit-submitbtn">Add</button> 
            <a class="addedit-cancelbtn" href="{{ url('owner') }}">Cancel</a>
 
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