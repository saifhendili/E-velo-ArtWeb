@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">



<div class="card" style="margin:20px;">
  <div class="card-header text-center">Local Details</div>
  <div class="card-body">
        <div class="card-body">




        <div class="form-group">
    <label for="exampleInputEmail1">Libelle</label>
    <input type="text" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $associations->libelle }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Emplacement</label>
    <input type="text" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $associations->emplacement }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Responsable</label>
    <input type="text" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $associations->responsable }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Superficie</label>
    <input type="text" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $associations->superficie }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="email" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $associations->description }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>



        
  </div>
    </hr>
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