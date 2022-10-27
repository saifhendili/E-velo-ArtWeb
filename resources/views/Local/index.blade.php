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
                        <h2 class="text-center">Locale</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/locale/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New Locale
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>libelle</th>
                                        <th>emplacement</th>
                                        <th>responsable</th>
                                        <th>superficie</th>
                                        <th>Relative Association </th>


                                
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($associations as $item)
                                    <tr>
                                    <td>{{ $item->libelle }}</td>

                                    <td>{{ $item->emplacement }}</td>
                                        <td>{{ $item->responsable }}</td>
                                        <td>{{ $item->superficie }}</td>
                                        <td>{{ $item->Association->nom }}</td>

                                        <td>
                                            <a href="{{ url('/locale/' . $item->id) }}" title="View Association"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/locale/' . $item->id . '/edit') }}" title="Edit Association"><button class="btn btn-primary btn-sm"><i class="feather icon-edit-2" aria-hidden="true"></i> Edit</button></a>

  
                                            <form method="POST" action="{{ url('/locale' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Association" onclick="return confirm("Confirm delete?")"><i class="feather icon-delete" aria-hidden="true"></i> Delete</button>
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