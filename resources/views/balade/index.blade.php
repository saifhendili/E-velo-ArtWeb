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
                        <h2>Balade</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/balades/create') }}" class="btn btn-success btn-sm" title="Add New Event">
                            Add New Balade
                        </a>
                        <br/>
                        <br/>
                        <div class="card-header">
                        <h5>Search balades : </h5>

                        <form method="GET" action="../admin/searchBalade">
                            @csrf
                            <div class="search-box">
                                <input type="text" class="form-control search" name="search" placeholder="Search for...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </form>
                    </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Picture</th>
                                        <th>Nombalade</th>
                                        <th>Adresse</th>
                                        <th>DATEAjout</th>

                                        <th>DateFin</th>
                                        <th>Numero</th>

                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($balade as $item)
                                    <tr>
                                    <td>
                                    
                
    <img src="{{ asset('images/' .  $item->picture) }}" class="img img-responsive w-25 h-10px" /> </td>

                                    <td>{{ $item->nombalade }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        <td>{{ $item->dateajout }}</td>
                                     
                                        <td>{{ $item->datefin }}</td>
                                        <td>{{ $item->numero }}</td>

                                        <td>
                                            <a href="{{ url('/admin/balades/' . $item->id) }}" title="View Balade"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/balades/' . $item->id . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="feather icon-edit-2" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ url('/admin/balades/' . $item->id . '/getSubscription') }}" title="Subscribers "><button class="btn btn-secondary btn-sm"><i class="feather icon-bell" aria-hidden="true"></i> Subscribers</button></a>

  
                                            <form method="POST" action="{{ url('/admin/balades' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Balade" onclick="return confirm("Confirm delete?")"><i class="feather icon-delete" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{-- Pagination --}}
                        <div class="d-flex justify-content-center ">
                            {!! $balade->links('pagination::bootstrap-4') !!}
                        </div>
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