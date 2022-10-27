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

                    @foreach($bloc as $item)



                    <div class="card p-3 mt-2">

                        <div class="d-flex justify-content-between align-items-center">

                      <div class="user d-flex flex-row align-items-center">

                        <img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span>
                          {{ $loop->iteration }}
                          <small class="font-weight-bold text-primary">{{ $item->Description }} </small></span>
                          
                      </div>


                      <small>3 days ago</small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">
                            <small>Remove</small>
                            <span class="dots"></span>
                            <small>Reply</small>
                            <span class="dots"></span>
                            <small>Translate</small>
                           
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
