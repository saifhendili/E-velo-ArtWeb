@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Balade</div>
  <div class="card-body">
       
      <form action="{{ url('admin/balades/' .$balade->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")


        <input type="hidden" name="id" id="id" value="{{$balade->id}}" id="id" />
       




        <label>adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$balade->adresse}}" class="form-control"></br>



        @error('adresse')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>nombalade</label></br>
        <input type="text" name="nombalade" id="nombalade" value="{{$balade->nombalade}}" class="form-control"></br>

        @error('nombalade')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror



        <label>dateajout</label></br>
        <input type="text" name="dateajout" value="{{$balade->dateajout}}" id="dateajout" class="form-control"></br>



        @error('dateajout')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>datefin</label></br>
        <input type="text" name="datefin" value="{{$balade->datefin}}" id="datefin" class="form-control"></br>
        @error('datefin')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror
     

        
        <label>picture</label></br>
        <input type="text" name="picture" value="{{$balade->picture}}" id="picture" class="form-control"></br>


        @error('picture')

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