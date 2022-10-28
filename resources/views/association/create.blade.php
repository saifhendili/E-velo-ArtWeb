@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">







<div class="card" style="margin:20px;">
  <div class="card-header text-center">Create New association</div>
  <div class="card-body">
       
      <form action="{{ url('admin/admin/association') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        @error('nom')

        <div class="alert alert-danger" role="alert">
{{$message}}</div>
        @enderror


        <label>Owner</label></br>
        <input type="text" name="owner" id="owner" class="form-control"></br>

        @error('owner')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>Nombre de personne</label></br>
        <input type="text" name="nbdepersonne" id="nbdepersonne" class="form-control"></br>


        @error('nbdepersonne')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>Objective</label></br>
        <input type="text" name="objective" id="objective" class="form-control"></br>

        @error('objective')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>


        @error('description')

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