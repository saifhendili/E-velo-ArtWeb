@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">







<div class="card" style="margin:20px;">
  <div class="card-header text-center">Create New Event</div>
  <div class="card-body">
       
      <form action="{{ url('event') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label>place</label></br>
        <input type="text" name="place" id="place" class="form-control"></br>
        @error('place')

        <div class="alert alert-danger" role="alert">
{{$message}}</div>
        @enderror


        <label>nameevent</label></br>
        <input type="text" name="nameevent" id="nameevent" class="form-control"></br>

        @error('nameevent')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>dateajout</label></br>
        <input type="text" name="dateajout" id="dateajout" class="form-control"></br>


        @error('dateajout')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>datefin</label></br>
        <input type="text" name="datefin" id="datefin" class="form-control"></br>

        @error('datefin')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

        <label>velo_id</label></br>
        <input type="text" name="velo_id" id="velo_id" class="form-control"></br>


        @error('velo_id')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

        
        <label>Picture</label></br>
        <input  name="picture" id="picture"  class="form-control" type="file"></br>


        @error('picture')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <input type="submit" value="Save" class="btn btn-success mt-3"></br>
    </form>
    
  </div>
</div>




















     
    </div>



















</div>

</div>

<!-- [ content ] End -->

<!-- [ Layout footer ] Start -->
<nav class="layout-footer footer bg-white">
    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
        <div class="pt-3">
            <span class="footer-text font-weight-semibold">&copy; <a href="https://srthemesvilla.com" class="footer-link" target="_blank">Srthemesvilla</a></span>
        </div>
        <div>
            <a href="javascript:" class="footer-link pt-3">About Us</a>
            <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
            <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
            <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
        </div>
    </div>
</nav>
<!-- [ Layout footer ] End -->
</div>


@endsection