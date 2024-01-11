@extends('layouts.marshall')

@section('content')

<div class="search-wrap-parent">
        <div class="search-wrap-child">

                <form action="marshall/taxi-results.php?id=" method="POST">                
                        <i id="filtersubmit" name="submit" class="fa fa-search"></i>
                        <input type="text" name="name" class="search-text" id="search" placeholder="Search..." autocomplete="off"/>
                        
                        <span>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Suspend isse lorem eros, congue eget justo quis, maximus tincidunt justo. Duis facilisis lectus sit amet egestas </span>

                        <select name="" class="search-option">
                                <option value="No selection" selected="">Association</option>
                        </select>

                        <select name="status" class="search-option">
                                <option value="No selection" selected="">Status</option>
                        </select>
                        <select name="status" class="search-option">
                                <option value="No selection" selected="">Taxi Seaters</option>
                        </select>
                        <select name="status" class="search-option">
                                <option value="No selection" selected="">Routes</option>
                        </select>
                        <button type="submit" class="search-form-submit">Search</button> 
                </form>

        </div>
</div>


@endsection
