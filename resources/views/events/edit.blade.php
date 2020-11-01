@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit Event</h3>
				<form action="">
					<form action="">
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
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
	