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

       
			
				<div class="column is-one-third">

   <div class="card">
  <header class="card-header">
    <p class="card-header-title">
      {{$event->event_title }} 


    </p>

  </header>
  <div class="card-content">
    <div class="content">
     {{$event->event_description}}
    </div>
  </div>
  <footer class="card-footer">
    <a class="card-footer-item"><i class="fa fa-facebook" aria-hidden="true"></i>
</a>
    <a class="card-footer-item"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class="card-footer-item"><i class="fa fa-share" aria-hidden="true"></i>
</a>
  </footer>
</div>
</div>		 

				   @endforeach
				   </div>
	
		</div>

@endsection