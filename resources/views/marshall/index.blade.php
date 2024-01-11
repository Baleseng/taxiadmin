@extends('layouts.marshall')

@section('content')

    <div class="index-dashboard-container">
      
      <div class="index-dashboard-widget">
        <div class="index-dashboard-card">
            @foreach ($taxi as $taxis)
            <a href="{{ url($url.'/'.$taxis->id . '-' . str_replace(' ', '-', $taxis->registration)) }}">
            <div class="index-card-wrap">
              <div class="index-card-content-row">

                <div class="index-card-content-col image">
                  <div class="index-card-content-img">
                      <img class="fa fa-bus" src="{{ url('') }}" >
                  </div>
                </div>

                <div class="index-card-content-col caption">
                  <div class="index-card-content-caption">
                    <div class="index-card-content-reg">{{ $taxis->registration }}</div>
                    <div class="index-card-content-status {{ $taxis->status }}"><i class="ranked fa fa-map-marker"></i> {{ $taxis->status }}</div>
                    <div class="index-card-content-model">{{ $taxis->model }}</div>
                    <div class="index-card-content-association">{{ $taxis->association }}</div>
                  </div>
                </div>

                <div class="index-card-content-col rank">
                  <span class="index-ranking-number">0.0</span>
                  <div class="index-taxi-raking">
                      <i class="ranked fa fa-star-o"></i>
                      <i class="ranked fa fa-star-o"></i>
                      <i class="ranked fa fa-star-o"></i>
                      <i class="ranked fa fa-star-o"></i>
                      <i class="ranked fa fa-star-o"></i>
                  </div>
                </div>
                 
              </div>
            </div>
            </a> 
            @endforeach
        </div>
      </div>
     
    </div>

@endsection