@extends('layouts.app')

@section('content')

<div class="container">
     
            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5>Blogs</h5>

                        <div class="buttons">

                            <span class="badge bg-white d-flex flex-row align-items-center">
                                <span class="text-primary">Comments "ON"</span>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                  
                                </div>
                            </span>
                            
                        </div>
                        
                    </div>

                    @foreach($blog as $item)



                    <div class="card p-3 mt-2">

                        <div class="d-flex justify-content-between align-items-center">

                      <div class="user d-flex flex-row align-items-center">

                        <span>
                          saif hendili
                          <small class="font-weight-bold text-primary">{{ $item->description }} </small></span>
                          
                      </div>


                      <small>3 days ago</small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">

                            <small>
                              <small>                                         
                                   <a href="{{ url('/blogs/' . $item->id . '/getComment') }}" title="Cyclictes "><button class="btn btn-secondary btn-sm"><i class="feather icon-bell" aria-hidden="true"></i> Commentaire</button></a>
                                   <a href="{{ url('/comment/create/' . $item->id) }}" title="View Blog"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Add Comment</button></a>
                                   <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href={{ url('/blogs/' . $item->id) .'/getComment' }}" class="fb-xfbml-parse-ignore">Partager</a></div>
                            </small>
                            <span class="dots"></span>
                            <small></small>
                            <span class="dots"></span>
                   
                           
                        </div>

                        <div class="icons align-items-center">
                            <i class="fa fa-user-plus text-muted"></i>
                            <i class="fa fa-star-o text-muted"></i>
                            <i class="fa fa-check-circle-o check-icon text-primary"></i>
                            
                        </div>
                          
                      </div>


                        
                    </div>
                    @endforeach
                </div>
                
            </div>
          </div>
            
          @endsection
