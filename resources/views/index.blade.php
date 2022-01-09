@extends('layouts.app')

@section('content')
    
    <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class=" text-center">Our Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
        @foreach ($Events as $even)
        
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="events/eventdetails/{{$even->id}}">
                <img src="{{ Voyager::image( $even->image_event ) }}" alt="Image" class="img-fluid">
              </a>
              <div class="post-entry-1-contents">            
                <h2><a href="events/eventdetails/{{$even->id}}">{{$even->nom_event}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$even->date_debut_event}} <span class="mx-2"></span>
              </div>
            </div>
          </div>
        
        @endforeach
      </div>
    
  </div>
   
  @endsection



