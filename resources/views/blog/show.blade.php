@extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $blog->Title }}</h5>
        <h5 class="card-title">Description : {{ $blog->Description }}</h5>
        <h5 class="card-title">Picture : {{ $blog->Picture }}</h5>
  </div>
      
    </hr>
  
  </div>
@endsection
