@extends('master')
@section('contents')
<style type="text/css">
	.rev {
		margin: 15px auto;
		width: 70%;
		background-color: lightblue;
		color:black;
	}
	.pstyle {
		margin-top: 20px;
		text-indent: 50px;
	}
</style>
<h2 class="text-center" style="text-shadow: 2px 2px;">My Bookings</h2>
@foreach($bookings as  $key => $booking)
<a href="view_booking_details?bkgId={{ $booking['id'] }}">
	<div class="shadow p-3 mb-5 rounded rev">
		<p class="d-inline-block pstyle"><span class="font-weight-bold">Name:</span> {{ $events[$key]->fullname }} </p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold">Event:</span> {{ $events[$key]->event_type }} </p>
		<p class="d-inline-block pstyle"><span class="font-weight-bold"> Date: </span> {{ $events[$key]->event_date }}</p>
		<p class="d-inline-block pstyle" style="text-indent: 50px;"><span class="font-weight-bold"> Time: </span> {{ $events[$key]->event_time }} </p>
	</div>
</a>
@endforeach
@endsection