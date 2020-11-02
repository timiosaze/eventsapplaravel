@extends('layouts.app')

@section('content')

		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				@include('includes.session')
				<h3>New Event</h3>
				<form action="{{route('events.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control" name="event_name" placeholder="Event">
					</div>
					<div class="form-group">
						<input type="text" class="form-control selector" name="event_date" placeholder="Date">
					</div>
					<hr>
					<div class="form-group">
						<input type="text" class="form-control" name="venue" placeholder="Venue">
					</div>
					<button class="btn-primary btn float-right">Create</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Events</h5>
				<ul>
					@forelse ($events as $event)

					<li class="data-list">
						<div class="data-text">
							<h4 class="title">{{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}</h4>
							<p class="text-class">{{$event->event_name}}</p>
							<p class="text-class-2">{{$event->venue}}</p>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('events.edit', $event->id)}}" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<a href="#" class="delete" data-toggle="modal" data-target="#exampleModal{{$event->id}}">Delete</a>
								</div>
							</div>
						</div>
					</li>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        {{Str::limit($event->event_name, 20)}}
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<form action="{{route('events.destroy', $event->id)}}" method="POST">
								@csrf
								@method('DELETE')
					       		<button type="submit" class="btn btn-danger">Delete</button>
					        </form>
					      </div>
					    </div>
					  </div>
					</div>

					@empty

					<li class="no-data text-center">
						No events yet.
					</li>	

					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			{{$events->links()}}
		</section>

@endsection
	