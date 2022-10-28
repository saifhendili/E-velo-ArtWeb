@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">







<div class="card" style="margin:20px;">
  <div class="card-header text-center">Create New subscription</div>
  <div class="card-body">
       
      <form action="{{ url('admin/subscriptions') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label>nomsubscriber</label></br>
        <input type="text" name="nomsubscriber" id="nomsubscriber" class="form-control"></br>
        @error('nomsubscriber')

        <div class="alert alert-danger" role="alert">
{{$message}}</div>
        @enderror


        <label>biketype</label></br>
        <input type="text" name="biketype" id="biketype" class="form-control"></br>

        @error('biketype')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror


        <label>age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>


        @error('age')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror
<label>adress</label></br>
        <input type="text" name="adress" id="adress" class="form-control"></br>


        @error('adress')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

<label>mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>

        @error('mobile')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

        <label>gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>

        @error('gender')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

        <label>balade</label></br>
        <select class="form-select digits" name="balade_id">
					@foreach($balades as $balade)
					<option value="{{$balade->id}}">{{$balade->nombalade}}</option>
					@endforeach
		</select>


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