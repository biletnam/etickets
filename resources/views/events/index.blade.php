@extends('layouts.app')

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column is-one-third ">
		<a href="{{ route('events.create') }}" class="button is-primary"> New Event</a>
		</div>
			<div class="column is-one-third ">
			<h1 class="title">My events</h1>
			</div>

		</div>
		<hr>
	
		<div class="card">
		<div class="card-content">
				@if ($events->isEmpty())
    <p> There are no events Once you create them they will appear here.</p>
        @else
		<table class="table is-narrow">
			<thead>
				<tr>
				    <th></th>
					<th>ID</th>
					<th>Title</th>
					<th>Type</th>
					<th>Topic</th>
					<th>Location</th>
					<th>Strats At</th>
					<th>Ends At</th>
				    <th>Organiser's Name</th>
         			<th>Description</th>
         			 <th>Edit</th>
				    <th>Delete</th>


				</tr>
				</thead>
				<tbody>
				@foreach ($events as $event)
				
				   <tr>
				   <td>	<b-checkbox name="select" class="" :checked="true" v-model="checked" style="padding-top: 3px;"> </b-checkbox></td>
					<td>{{$event->id}}</td>
					<td>{{$event->event_title}}</td>
					<td>{{$event->event_type}}</td>
					<td>{{$event->event_topic}}</td>
					<td>{{$event->location}}</td>
					<td>{{$event->starts_at}}</td>
					<td>{{$event->ends_at}}</td>
					<td>{{$event->organisers_name}}</td>
     				<td>{{ $value = str_limit($event->event_description,70, $end = '......') }}</td>

				

					<td> <a class="button is-outlined is-primary" href="{{ route('events.edit',$event->id) }}">
					<i class="fa fa-edit"></i></a></td>
					<td> <a class="button is-outlined is-primary" href="{{ route('events.edit',$event->id) }}">
					<i class="fa fa-trash-o"></i></a></td>
				   </tr>
				   @endforeach
			    </tbody>
		</table>
		</div>

		</div>
		{{$events->links()}}
		@endif

</div>
@endsection