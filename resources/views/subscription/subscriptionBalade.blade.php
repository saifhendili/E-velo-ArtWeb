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
                        <h2>Event</h2>
                    </div>
                    <div class="card-body">
                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Picture</th>
                                        <th>Nameevent</th>
                                        <th>Place</th>
                                        <th>DATEAjout</th>

                                        <th>DateFin</th>
                                        <th>Velo_id</th>

                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($eventscyclicte->getCyclicte as $item)
                                @foreach($baladesubscribs->getSubscription as $item)
                                    <tr>
        

                                     <td>{{ $item->nomsubscriber }}</td>
                                        <td>{{ $item->biketype }}</td>
                                        <td>{{ $item->age }}</td>
                                     
                                        <td>{{ $item->adress }}</td>
            

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