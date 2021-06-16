@extends('master')
@section('contents')
<head>
	<style>
	
	table{
		margin:30px auto;
	}
	h3{
		margin-top:50px;
	}
	
	th{
		background:#7ac7ff  ; 
	}

	.buttn{
		
		width:20%;
	}
	.info {
	  background-color: #e7f3fe;
	  border-left: 6px solid #2196F3;
	  width:70%;
	  margin:0px auto;
	}

	</style>
</head>
@if($errors->any())
	<div class="alert alert-danger">
	        {{ $errors->first() }}
	</div>
@endif
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
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
				<td> &#8377;{{ $dish->price }}</td>
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
	<table class="table">
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
				<td> &#8377;{{ $venue->price }}</td>
				@endforeach
			</tr>
			<tr>
				<td>Catering</td>
				<td> &#8377;{{ $catering_total }}</td>
			</tr>
			<tr style="background-color: #c6e7ff;">
				<td style="font-weight: bold;">Grand Total:</td>
				<td> &#8377; {{ $catering_total+$venue->price }}</td>
			</tr>
			
		</tbody>
	</table>
	<p style="font-size: large;"><span style="font-weight: bolder;">Advance amount payable:</span> &#8377; {{ (($catering_total+$venue->price) * 0.5) }} </p>
</div>
<div class="info">
  <p><strong>&nbspTerms and Condition!!</strong><br>&nbsp To confirm booking advance payment needs to be done.<br>
  &nbsp No refund of advance payment if booking is cancelled by you.<br>
  &nbsp For decoration and Music bookings you need to contact us.<br>
  &nbsp If your booking gets rejected due to non availabilty of venues and our any other services, your money will be refunded back to you.</p>
  &nbsp <input id="checkbox" type="checkbox" required>
  <label for="checkbox"> I agree to these Terms and Conditions.</label>
</div>
<div class="buttn" style="margin:0px auto">
	<a href="payment?id={{$bId}}"><button class="btn btn-info" style="width:80%; margin: 20px;font-size:20px;">PAY NOW</button></a>
</div>
@endsection