@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header text-center">Edit Cyclicte</div>
  <div class="card-body">
       
      <form action="{{ url('Cyclicte/' .$event->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")


        <input type="hidden" name="id" id="id" value="{{$event->id}}" id="id" />
       




        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$event->name}}" class="form-control"></br>


        @error('name')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>description</label></br>
        <input type="text" name="description" id="description" value="{{$event->description}}" class="form-control"></br>

        
        @error('description')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>nbrpersonnes</label></br>
        <input type="text" name="nbrpersonnes" value="{{$event->nbrpersonnes}}" id="nbrpersonnes" class="form-control"></br>


        @error('nbrpersonnes')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror



        <label>tarif</label></br>
        <input type="text" name="tarif" value="{{$event->tarif}}" id="tarif" class="form-control"></br>

     
        @error('tarif')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

       
<label>outilsdetest</label></br>
        <input type="text" name="outilsdetest" id="outilsdetest" value="{{$event->outilsdetest}}" class="form-control"></br>


        @error('outilsdetest')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror



        <input type="submit" value="Update" class="btn btn-success"></br>
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