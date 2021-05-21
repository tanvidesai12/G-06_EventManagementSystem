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


<div style="margin: 20px auto; width:70%;">
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
				<td>{{ $venue->price }}</td>
				@endforeach
			</tr>
			<tr>
				<td>Catering</td>
				<td></td>
			</tr>
			<tr style="background-color: #c6e7ff;">
				<td style="font-weight: bold;">Grand Total:</td>
				<td></td>
			</tr>
			
		</tbody>
	</table>
</div>
<div class="info">
  <p><strong>&nbspTerms and Condition!!</strong><br>&nbsp To confirm booking adavance payment needs to be done.<br>
  &nbsp No refund of advance payment if booking is cancelled.<br>
  &nbsp For decoration and Music bookings you need to contact us</p>
  &nbsp <input id="checkbox" type="checkbox" required>
  <label for="checkbox"> I agree to these Terms and Conditions.</label>
</div>
<div class="buttn" style="margin:0px auto">
	<a href="#"><button class="btn btn-info" style="width:80%; margin: 20px;font-size:20px;">PAY NOW</button></a>
</div>
@endsection