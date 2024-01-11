@extends('layouts.main')

@section('description', '')
@section('keywords', '')

@section('title', 'Admin')


@section('searchfield')
  @include('includes.header_search')
@endsection

@section('menubutton')
  @include('includes.header_section_button')
@endsection

@section('content')
  @if (session('status'))
    {{ session('status') }}
  @endif
  <div class="admin-dashboard-default-container"> 
    

    @include('includes.taxi_operation')
    @include('includes.taxi_chart_realtime')
    @include('includes.taxi_chart_weekly')

  
  </div>
@endsection