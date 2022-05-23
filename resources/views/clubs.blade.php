@extends('layouts.app')

@section('content')
<br><br><br>

<div class="section-header">
  <h2>List of our Clubs</h2>
  <p>Here are some of our speakers</p>
</div>
<div class="site-section">
  <div class="container">
    @foreach ($Clubs as $club)
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="img-years">
          <img src="{{ Voyager::image( $club->image ) }}" alt="Image" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 ml-auto pl-lg-5 text-center">
        
      <br><br>
        <h3 class="text-center">{{$club->nom_club}}</h3>
        <p class="mb-5 lead">{{$club->description}}</p>
        <p><a href="clubs/clubdetails/{{$club->id}}" class="btn btn-primary">Details </a></p>
      </div>
    </div>
    @endforeach
  
  </div>
</div>

<br><br><br>

@endsection