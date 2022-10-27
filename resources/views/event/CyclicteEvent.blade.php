
@extends('FrontEnd.Master')

@section('content')
<div class="layout-content">


<div class="container-fluid flex-grow-1 container-p-y">

<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Cyclicte Event</h2>
                    </div>
                    <div class="card-body">
                     
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

                                        
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($eventscyclicte->getCyclicte as $item)                                    <tr>
                                    <td>{{ $item->name }}</td>

                                    <td>{{ $item->description }}</td>
                                        <td>{{ $item->nbrpersonnes }}</td>
                                        <td>{{ $item->tarif }}</td>
                                        <td>{{ $item->outilsdetest }}</td>

                                   
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