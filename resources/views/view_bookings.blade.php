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
<h2 class="text-center" style="text-shadow: 2px 2px;">My Bookings</h2>
@foreach($bookings as  $key => $booking)
<a href="view_booking_details?bkgId={{ $booking['id'] }}">
	<div class="shadow p-3 mb-5 rounded rev">
		<p class="d-inline-block pstyle"><span class="font-weight-bold">Name:</span> {{ $events[$key]->fullname }} </p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold">Event:</span> {{ $events[$key]->event_type }} </p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold"> Date: </span> {{ $events[$key]->event_date }}</p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold"> Time: </span> {{ $events[$key]->event_time }} </p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold"> Booking status: </span> {{ $booking['booking_status'] }} </p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold"> No of guests: </span> {{ $booking['no_of_guests'] }} </p>
	</div>
</a>
@endforeach
@endsection