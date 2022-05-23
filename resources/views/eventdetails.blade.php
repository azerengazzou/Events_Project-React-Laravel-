@extends('layouts.app')
@section('content')
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{($event->nom_event)}}
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-7">
        <img class="img-fluid" style="max-height:600px;max-width:500px;height:auto;" src="{{ Voyager::image( $event->image_event ) }}" alt="">
      </div>
  
      <div class="col-md-4">
        <h3 class="my-3"> Description </h3>
        <p>{{($event->description)}}</p>
        <span class="my-3">Date de début :</span>
        <ul>
          <li>{{($event->date_debut_event)}}</li>
        </ul>
        <span class="my-3">Date de fin :</span>
        <ul>
          <li>{{($event->date_fin_event)}}</li>
        </ul>
        <span class="my-3">Prix :</span>
        <ul>
          <li>{{($event->price)}}</li>
        </ul>
        <span class="my-3">Club Page :</span>
        <ul>
          <li><a href="/clubs/clubdetails/{{$event->club_id}}">Club Page</a></li>
        </ul>
      </div>
  
    </div>
    <!-- /.row -->
  

    <div class="col-lg-12">
      <div class="card mt-4 border-0 mb-4">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="card-body d-flex align-items-center c-detail pl-0">
              <div class="mr-3 align-self-center">
                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
              </div>
              <div class="">
                <h6 class="font-weight-medium">Address</h6>
                <p class="">{{($event->place)}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="card-body d-flex align-items-center c-detail">
              <div class="mr-3 align-self-center">
                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
              </div>
              <div class="">
                <h6 class="font-weight-medium">Phone</h6>
                <p class="">--------------
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="card-body d-flex align-items-center c-detail">
              <div class="mr-3 align-self-center">
                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
              </div>
              <div class="">
                <h6 class="font-weight-medium">Email</h6>
                <p class="">
                  {{($event->email)}}
                  <br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<section class="content-item" id="comments">
  <div class="container">   
    <h3>{{$nbTotal}} Comments</h3>
    <div class="row">
      @foreach ($comments as $comment)
      <div class="col-sm-8">
        <div class="media">
        @foreach ($users as $user)
        @if($user->id == $comment->id_user)
                <div class="media-body">
                  <a ><img class="media-object" style="float: left;" src="{{ Voyager::image( $user->avatar ) }}">
                  </a>
                  <h4 class="media-heading">{{$user->name}}</h4>
                  
                  <ul class="list-unstyled list-inline media-detail pull-left">
                    <li><i class="fa fa-calendar"></i>{{$comment->created_at}}</li>
                  </ul>
                  <p>{{$comment->comment_text}}</p>
                </div>
						@endif
            @endforeach
            </div>
          </div>
            @endforeach
              @if(Auth::check())
              <form action='{{$event->id}}/store' method="POST">
                @csrf
                <input type="hidden" name="id_event" value="{{ $event->id }}">
								<input type="hidden" name="user" value="{{ Auth::id() }}">
                <h3 class="pull-left">New Comment</h3>
                  <fieldset>
                      <div class="row">
                          <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                              <textarea class="form-control" id="message" name="message"placeholder="Your message" required=""></textarea>
                          </div>
                      </div>
                  </fieldset>
                  <button type="submit" class="btn btn-normal pull-right">Submit Comment</button>
              </form>
              
						@endif
          </div>
        </div>
        </div>    
  </section>
</div>
@endsection