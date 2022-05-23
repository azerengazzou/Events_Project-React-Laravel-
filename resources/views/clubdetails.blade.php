@extends('layouts.app')
@section('content')

<div class="py-5 banner2">
  <div class="container">
      <div class="row">
          <!-- Column -->
          <div class="col-lg-5 pr-4">
              <img src="{{ Voyager::image( $club->image ) }}" class="img-shadow img-fluid" alt="wrapkit" />
          </div>
          <div class="col-lg-7">
              <div class="text-box">
                  <h2 class="font-weight-light">{{($club->nom_club)}}</h2>
                  <p>{{($club->description)}}</p>
                  <h5>Date de Création : {{($club->date_creation_club)}}</h5>
                  <h5>Membres : {{($club->members)}}</h5>
                  <h5>Contact : +216 {{($club->phone_number)}}</h5>
              </div>
          </div>
      </div>
  </div>
</div>
<hr>
<div class="py-5 service-7">
  <div class="container">
      <!-- Row  -->
      <div class="row">
        @foreach ($Events as $event)
          <!-- Column -->
          <div class="col-md-4 mb-4">
              <div class="">
                  <img class="rounded img-fluid" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature2/market.jpg" alt="wrappixel kit" />
                  <div class="mt-4">
                      <h6 class="font-weight-medium">{{($event->nom_event)}}</h6>
                      <p class="mt-3">{{($event->date_debut_event)}}</p>
                      <a href="javascript:void(0)" class="linking">Learn More</a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>










<section id="contact" class="section-bg">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-header">
      <h2>Join Us</h2>
      <p>Nihil officia ut sint molestiae tenetur.</p>
    </div>
    <div class="form">
      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
          </div>
          <div class="form-group col-md-6 mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div>
  </div>
</section>

@endsection