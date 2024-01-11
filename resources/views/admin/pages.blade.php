@extends('layouts.main')

@section('description', '')
@section('keywords', '')

@section('title', 'Admin')


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

  

  <div class="addedit-container">
    <div class="admin-breadcrumb-wrap">
      <ul class="breadcrumb">
        <li><a href="{{ url($url.'/') }}">Admin</a></li>
        <li>Add</li>
      </ul>
    </div>
    <form method="POST" action="{{ url('admin/pages')}}">
  
      {{ csrf_field() }}
      
      <div class="addedit-wrap">
        <div class="addedit-create-title">Create New Article</div>
        
        <div class="addedit-input-container">
      
          <div class="addedit-input-fields">
            <div class="addedit-input-option">
              <input type="text" name="active"/>
            </div>
          </div>

        </div>
      </div>

      <div class="addedit-wrap">
        <div class="addedit-submi-btn">
          <button type="submit" class="addedit-submitbtn">Add</button> 
          <a class="addedit-cancelbtn" href="{{ url('admin') }}">Cancel</a>
        </div>
      </div>

    </form>
  </div>
@endsection