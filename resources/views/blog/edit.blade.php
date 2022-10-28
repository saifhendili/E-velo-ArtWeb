@extends('FrontEnd.Master')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">
        
        <form action="{{ url('admin/blog/' .$blog->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$blog->id}}" id="id" />
          <label>Publication</label></br>
          <input type="text" name="description" id="description" value="{{$blog->description}}" class="form-control"></br>


          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
@endsection
