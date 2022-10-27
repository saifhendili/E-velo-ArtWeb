@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">







<div class="card" style="margin:20px;">
  <div class="card-header text-center">Create New Cyclicte</div>
  <div class="card-body">
       
      <form action="{{ url('Cyclicte') }}" method="post">
        {!! csrf_field() !!}
        <label>name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>


        @error('name')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>


        
        @error('description')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>nbrpersonnes</label></br>
        <input type="int" name="nbrpersonnes" id="nbrpersonnes" class="form-control"></br>


        
        @error('nbrpersonnes')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>tarif</label></br>
        <input type="int" name="tarif" id="tarif" class="form-control"></br>

        
        @error('tarif')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

<label>outilsdetest</label></br>
        <input type="text" name="outilsdetest" id="outilsdetest" class="form-control"></br>

        
        @error('outilsdetest')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

     
        <select name="event_id" class="form-control">
  @foreach($event as $item)
<option value="{{$item->id}}">{{$item->nameevent}}</option>
  @endforeach
</select>


@error('event_id')

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