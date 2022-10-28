@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">

<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header text-center">Create New Cyclicte</div>
  <div class="card-body">
       
      <form action="{{ url('/comment') }}" method="post">
        {!! csrf_field() !!}

        <label>Commentaire</label></br>
        <input type="text" name="cmnt" id="cmnt" class="form-control"></br>

        @error('cmnt')

<div class="alert alert-danger" role="alert">
{{$message}}</div>
@enderror

      
        <select  name="blog_id" class="form-control" hidden>
  @foreach($Blog as $item)
<option value={{ request()->id }}></option>
  @endforeach
</select>


@error('blog_id')

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