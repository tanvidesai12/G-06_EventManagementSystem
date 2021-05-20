@extends('master')
@section('contents')

@if($errors->any())
	<div class="alert alert-danger">
	        {{ $errors->first() }}
	</div>
@endif
<div style="margin: 20px auto; width:70%;">
<table class="table table-striped">
	<thead>
		<tr>
			<th>Particulars</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		@foreach($dishes as $dish)
		<tr>
			<td>{{ $dish->dish_name }}</td>
			<td>{{ $dish->price }}</td>
		</tr>
		@endforeach
		<tr>
			<td>Total</td>
			<td>{{ $catering }}</td>
		</tr>
		<tr>
			<td style="font-weight: bold;">Grand Total[No. of guests * cost per plate]</td>
			<td>{{ $catering_total }}</td>
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