@extends('layouts.driver')

@section('content') 

    <div class="taxi-profile-container">
        <div class="taxi-profile-row row">
            <div class="taxi-profile-col-2">
                <div class="taxi-profile-img">
                    <img class="fa fa-bus" src="" >
                </div>
            </div>
            <div class="taxi-profile-col-1">
                <div class="taxi-profile-name">
                    <h1>{{ $taxi->registration }}</h1>
                    <div class="taxi-profile-interest">
                        <i class="fa fa-"></i> 
                        <b>Model</b> 
                        <span>: {{ $taxi->model }} </span>
                    </div>    
                </div>
                    <div class="taxi-profile-form">
                        <div class="taxi-input-fields">
                            <div class="taxi-input-option">
                                <form method="POST" action="{{ url('driver/'.$taxi->id) }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                        <label>Revenue: <span>R</span></label>
                                        <input type="number" name="dailyRevenue">
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="driver_id"/>
                                    <button type="submit" class="addedit-submitbtn">SUBMIT</button> 
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="taxi-profile-title">
                        <div class="taxi-profile-border"></div>
                        <div class="taxi-profile-h5">Taxi Perfomance Ranking</div>
                    </div>

                    <span class="ranking-number">4.5</span>
                    <div class="taxi-profile-raking">
                        <i class="ranked fa fa-star"></i>
                        <i class="ranked fa fa-star"></i>
                        <i class="ranked fa fa-star-half-alt"></i>
                        <i class="ranked fa fa-star-o"></i>
                        <i class="ranked fa fa-star-o"></i>
                    </div>

                    <div class="taxi-profile-info">
                        <div class="taxi-profile-title">
                            <div class="taxi-profile-border"></div>
                            <div class="taxi-profile-h5">Info</div>
                        </div>
                        <div class="taxi-profile-li">
                            <i class="fa fa-"></i> 
                            <b>Driver</b> 
                            <span> :  {{ $taxi->driver }}</span>
                        </div>
                        <div class="taxi-profile-li">
                            <i class="fa fa-"></i> 
                            <b>Owner</b> 
                            <span>: {{ $taxi->owner }}</span>
                        </div>
                        <div class="taxi-profile-li">
                            <i class="fa fa-"></i> 
                            <b>Association</b> 
                            <span>: {{ $taxi->association }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection