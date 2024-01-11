@extends('layouts.main')

@section('description', '')
@section('keywords', '')

@section('title', 'Marshall')


@section('searchfield')
  @include('includes.header_search')
@endsection

@section('menubutton')
  @include('includes.header_section_button')
@endsection

@section('content')
<div class="admin-dashboard-default-container"> 
    
    @include('includes.taxi_operation')
  
  </div>
@endsection