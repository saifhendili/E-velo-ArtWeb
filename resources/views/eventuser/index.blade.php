@extends('layouts.app')

@section('content')


     
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
        </nav>
        <div class="row">
        @foreach($event as $item)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="category mb-30">
                    <div class="job">
                        <span class="colors1 mb-4">OurEvents &amp; </span>
                        <h5><a href="#">{{ $item->nameevent }}</a></h5>
                        <ul class="place">
                            <li>
                                <p><i class="fas fa-map-marker-alt pe-2"></i> {{ $item->place }}</p>
                            </li>
                           
                        </ul>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="left">
                                <img src="{{ asset('images/' .  $item->picture) }}" class="img img-responsive w-25 h-10px" />                            </div>
                            <span class="time">{{ $item->dateajout }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="btn btn-primary mb-30">
                    <span>Find More</span>
                    <span class="fas fa-arrow-right"></span>
                </div>
            </div>
        </div>
    </div>
            
          @endsection
