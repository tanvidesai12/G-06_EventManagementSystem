@extends('master')
@section('contents')
<style type="text/css">
	.rev {
		margin: 15px auto;
		width: 75%;
		background-color: lightblue;
		color:black;
	}
	.pstyle {
		margin-top: 20px;
		text-indent: 25px;
	}
</style>
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if($errors->any())
		<div class="alert alert-danger">
		        {{ $errors->first() }}
		</div>
@endif
<h2 class="text-center m-3" style="text-shadow: 2px 2px;">My Bookings</h2>
@if($data->isEmpty())
	<div class="jumbotron" style="margin: 5%;">
	  <h3 class="text-center">You haven't made any bookings yet!</h3>
	</div>
@else
	@foreach($data as  $dt)
	<a href="view_booking_details?bkgId={{ $dt->id }}">
		<div class="shadow p-3 mb-5 rounded rev">
			<p class="d-inline-block pstyle"><span class="font-weight-bold">Name:</span> {{ $dt->fullname }} </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold">Event:</span> {{ $dt->event_type }} </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> Date: </span> {{ $dt->event_date }}</p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> Time: </span> {{ $dt->event_time }} </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> Booking status: </span> {{ $dt->booking_status }} </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> No of guests: </span> {{ $dt->no_of_guests }} </p>
		</div>
	</a>
	@endforeach
@endif
@endsection