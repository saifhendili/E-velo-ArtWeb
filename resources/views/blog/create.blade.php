@extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">Blog Page</div>
  <div class="card-body">
      
      <form action="{{ url('admin/blog') }}" method="post">
        {!! csrf_field() !!}
        <label>Publication</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>

        @error('description')

        <div class="alert alert-danger" role="alert">
        {{$message}}</div>
        @enderror
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
        
  </div>
</div>
@endsection
