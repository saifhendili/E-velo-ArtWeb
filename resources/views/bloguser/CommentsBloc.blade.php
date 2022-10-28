
@extends('FrontEnd.Master')
@section('content')


<div class="container mt-5">

                @foreach($eventscyclicte->getComment as $item) 
                
                <div class="d-flex justify-content-center row">
                <div class="col-md-12 my-3">
            <div class="d-flex flex-column comment-section">
          
                    <div class="bg-white p-2">
                     
                        <div class="mt-2">
                    Saif hendili        <p class="comment-text">{{ $item->cmnt }}</p>
                        </div>
                    </div>    
                </div>
        </div>

</div>     
                       @endforeach
                    </div>






                
                {{-- <div class="bg-white">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                    </div>
                </div>
                <form class="bg-light p-2">
                    <input type="hidden" name="post_slug" >
                    <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                </form> --}}

         





<!-- [ Layout footer ] End -->



@endsection