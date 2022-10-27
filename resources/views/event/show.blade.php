@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">



<div class="card" style="margin:20px;">
  <div class="card-header text-center">Event Details</div>
  <div class="card-body">
        <div class="card-body">

        <p class="card-text text-center">       <img src="{{ asset($event->picture) }}" class="img img-responsive w-25" alt="zze" />
</p>




        <div class="form-group">
    <label for="exampleInputEmail1">place</label>
    <input type="email" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $event->place }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">nameevent</label>
    <input type="email" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $event->nameevent }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">dateajout</label>
    <input type="email" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $event->dateajout }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">datefin</label>
    <input type="email" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $event->datefin }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">velo_id</label>
    <input type="email" class="form-control"  disabled aria-describedby="emailHelp"  value="{{ $event->velo_id }}">
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