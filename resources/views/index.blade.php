@extends('layouts.app')
@section('content')
{{-- <section id="speakers">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-header">
      <h2>Nos deriniers évènements</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>

    <div class="row">
      @foreach ($Events as $even)
      <div class="col-lg-4 col-md-6">
        <div class="speaker aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ Voyager::image( $even->image_event ) }}" alt="Speaker 1" class="img-fluid">
          <div class="details">
            <h3><a href="events/eventdetails/{{$even->id}}">{{$even->nom_event}}</a></h3>
            <p>{{$even->email}}</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section id="hotels" class="section-with-bg">

  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-header">
      <h2>Nos Clubs</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>

    <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      @foreach ($Clubs as $club)
      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <div class="hotel-img">
            <img src="{{ Voyager::image( $club->image ) }}" alt="Hotel 1" class="img-fluid">
          </div>
          <h3><a href="clubs/clubdetails/{{$club->id}}">{{$club->nom_club}}</a></h3>
          <p>Members : {{$club->members}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> --}}
<div id="example">
  <script jsx="true" src="{{ asset('js/main.js') }}"></script>
</div>
  @endsection



