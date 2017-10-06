@extends('layouts.app')

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
			<div class="column is-one-third ">
			<h1 class="title"> events</h1>
			</div>

		</div>
		<hr>
			<div class="columns m-t-10 ">

				@foreach ($events as $event)

       
			
				<div class="column is-one-quarter">

          <div class="card">
  <div class="card-image">
    <figure class="image 64x64px">
       <img src="event-images/{{ $event->event_image }}"/>

    </figure>
  </div>
  <div class="card-content ">
    <div class="content">
      <p class="card_p"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp {{$event->starts_at}}</p>
      <p class="card_p title is-6">{{$event->event_title}}</p>

      <p class="card_p"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp{{$event->location}}</p>
   </div>
  </div>
  <footer class="card-footer">
    <p class="card-footer-item "> <a href="#"><span class="tag">Tech</span></a> &nbsp <a href="#"><span class="tag">Data</span></a> &nbsp  <a href="#"><span class="tag">Science</span></a></p>
    <a href="#" class="card-footer-item"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
    <a href="#" class="card-footer-item"><i class="fa fa-share" aria-hidden="true"></i></a>
  </footer>

</div>



</div>		 

				   @endforeach
				   </div>
	
		</div>

@endsection