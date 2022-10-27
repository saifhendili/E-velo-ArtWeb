@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">


@if(@session('flash_message'))
<div class="alert alert-primary"> {{session('flash_message')}}</div>

@endif


<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Cyclicte</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Cyclicte/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New Cyclicte
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Name </th>
                                    <th>Description</th>
                                    <th>Nbrpersonnes</th>
                                    <th>tarif</th>
                                    <th>outilsdetest</th>
                                        <th>Relative Event </th>


                                
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $item)
                                    <tr>
                                    <td>{{ $item->name }}</td>

                                    <td>{{ $item->description }}</td>
                                        <td>{{ $item->nbrpersonnes }}</td>
                                        <td>{{ $item->tarif }}</td>
                                        <td>{{ $item->outilsdetest }}</td>
                                        <td>{{ $item->Event->nameevent }}</td>

                                        <td>
                                            <a href="{{ url('/Cyclicte/' . $item->id) }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Cyclicte/' . $item->id . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="feather icon-edit-2" aria-hidden="true"></i> Edit</button></a>

  
                                            <form method="POST" action="{{ url('/Cyclicte' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Event" onclick="return confirm("Confirm delete?")"><i class="feather icon-delete" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>



                        
  
                    </div>
                </div>
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