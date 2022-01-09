@extends('layouts.app')

@section('content')
<div class="site-section">
  <div class="container">
    @foreach ($Events as $event)
    <div class="row">
      <div class="col-lg-4 mb-6 mb-lg-0">
        <div class="img-years">
          <img src="{{ Voyager::image( $event->image_event ) }}" alt="Image" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 ml-auto pl-lg-5 text-center">
        <h3 class="text-center">{{$event->nom_event}}</h3>
        <p class="mb-5 lead">{{$event->description}}</p>
        <p><a href="events/eventdetails/{{$event->id}}" class="btn btn-primary">Details </a></p>
      </div>
    </div>
    @endforeach
    
  </div>
</div>

@endsection