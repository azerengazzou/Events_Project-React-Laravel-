@extends('layouts.app')
@section('content')
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{($club->nom_club)}}
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" src="{{ Voyager::image( $club->image ) }}" alt="">
      </div>
  
      <div class="col-md-4">
        <h3 class="my-3"> Description </h3>
        <p>{{($club->description)}}</p>
        <span class="my-3">Date de création :</span>
        <ul>
          <li>{{($club->date_creation_club)}}</li>
        </ul>
      </div>
  
    </div>
    <!-- /.row -->
  
    <!-- Related Projects Row -->
    <h3 class="my-4">Related Events</h3>
        @foreach ($events as $event)
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                  {{($event->nom_event)}}
                    <img class="img-fluid" src="{{ Voyager::image( $event->image_event ) }}" alt="">
                </a>
            </div>
        </div>
        @endforeach

  
  </div>
  <!-- /.container -->
  
@endsection