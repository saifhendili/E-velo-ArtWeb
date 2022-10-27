@extends('layouts.app')

@section('content')


     
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
        </nav>
        <div class="row">
        @foreach($associations as $item)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="category mb-30">
                    <div class="job">
                        <span class="colors1 mb-4">Our Association &amp; </span>
                        <h5><a href="#">{{ $item->nom }}</a></h5>
                        <ul class="place">
                            <li>
                                <p><i class="fas fa-map-marker-alt pe-2"></i> {{ $item->description }}</p>
                            </li>
                           
                        </ul>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="left">
                                <p>{{ $item->owner }}.</p>
                            </div>
                            <span class="time">{{ $item->objective }}</span>
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
