@extends('master')
@section('contents')
<head>
	<style>
	.details{
		width:70%;
		padding:20px;
		margin:10px auto;
		border-radius:20px;
		background-image: linear-gradient(to right,#60beff ,#c6e7ff ); 
	}
	table{
		margin:30px auto;
	}
	h3{
		margin-top:50px;
	}
	
	th{
		background:#7ac7ff  ; 
	}
	tr:nth-child(odd) {
		background-color: #c6e7ff;
		}

	
	</style>
</head>
@if($errors->any())
	<div class="alert alert-danger">
	        {{ $errors->first() }}
	</div>
@endif
@foreach($venues as $venue)
	<div class="details">
		<h4 style="color:white">Venue Details</h4>
		<p class="d-inline-block"><span class="font-weight-bold">Name:</span> {{ $venue->venue_name }} </p><br>
		<p class="d-inline-block"><span class="font-weight-bold">Address:</span> {{ $venue->address }} </p><br>
		<p class="d-inline-block"><span class="font-weight-bold"> Price: </span>&#8377;  {{ $venue->price }}</p>
	</div>
@endforeach
<div style="margin: 20px auto; width:70%;">
<h3>Catering Bill</h3>
<table class="table">
	<thead>
		<tr>
			<th>Dish Name</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		@foreach($dishes as $dish)
		<tr>
			<td>{{ $dish->dish_name }}</td>
			<td>&#8377; {{ $dish->price }}</td>
		</tr>
		@endforeach
		<tr>
			<td>Total</td>
			<td>&#8377; {{ $catering }}</td>
		</tr>
		<tr style="background-color:#7aa6ff">
			<td style="font-weight: bold;">Grand Total[No. of guests * cost per plate]</td>
			<td >&#8377; {{ $catering_total }}</td>
		</tr>
	</tbody>
</table>
<h3>Total Bill</h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Particulars</th>
			<th>Cost</th>
		</tr>
	</thead>
	<tbody>
		
		<tr>
			<td>Venue</td>
			@foreach($venues as $venue)
				<td>&#8377; {{ $venue->price }}</td>
			@endforeach
		</tr>
		<tr>
			<td>Catering</td>
			<td>&#8377; {{ $catering_total }}</td>
		</tr>
		<tr style="background-color:#7aa6ff">
			<td style="font-weight: bold;">Grand Total:</td>
			<td>&#8377; {{ $catering_total + $venue->price }}</td>
		</tr>
		<tr>
			<td style="font-weight: bold;">Advance amount paid:</td>
			<td> &#8377; {{ (($catering_total + $venue->price) * 0.5) }} </td>
		</tr>
		<tr>
			<td style="font-weight: bold;">Payment status (Advance):</td>
			<td>{{ $pay_status }}</td>
		</tr>
	</tbody>
</table>
@if(!$present->isEmpty() && !$reviewPresent)
	<center><a href="add_review?bkgId={{ $bId }}" class="btn btn-secondary">Add a review</a></center>
@endif
@if($present->isEmpty() && $cancellation->booking_status!='Cancelled')
<center><a href="cancel_booking?bkgId={{ $bId }}" class="btn btn-secondary" style="margin-left: 10px;">Cancel booking</a></center>
@endif
</div>
@endsection