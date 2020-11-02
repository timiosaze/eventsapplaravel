@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				<h3>Edit Event</h3>
				<form action="{{route('events.update', $event->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<input type="text" class="form-control" name="event_name" placeholder="Event" value="{{$event->event_name}}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control selector" name="event_date" placeholder="Date" value="{{$event->event_date}}">
					</div>
					<hr>
					<div class="form-group">
						<input type="text" class="form-control" name="venue" placeholder="Venue" value="{{$event->venue}}">
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
	