@extends('contact')
@section("content")
<div class="container contact">
	@if($errors->any())
		<div class="alert alert-danger">
		        {{ $errors->first() }}
		</div>
	@endif
	<div class="row">
		<div class="col-md-9">
		<form action="{{ url('payment-process') }}" method="POST" name="laravel_instamojo">
		@csrf
		  <div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="name">Name</label>
			  <input type="name" name="name" class="form-control" id="name">
			</div>
			<span class="errorMsgs" style="color: red">@error('name'){{$message}}@enderror</span>
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Email</label>
			  <input type="email" name="email" class="form-control" id="email">
			</div>
			<span class="errorMsgs" style="color: red">@error('email'){{$message}}@enderror</span>
		  </div>
		  
		  <div class="form-group ">
			<label for="phone_no">Contact No</label>
			<input type="text" name="phone_no" class="form-control" id="phone_no" >
		  </div>
		  <span class="errorMsgs" style="color: red">@error('phone_no'){{$message}}@enderror</span>
		  
		   <div class="form-group ">
			<label for="advance">Advance Amount</label>
			<input type="text" name="advance" class="form-control" id="advance" placeholder="{{$adv_amount}}" value="{{$adv_amount}}">
		  </div>
		  <span class="errorMsgs" style="color: red">@error('advance'){{$message}}@enderror</span>
		  
		 <center> <button type="submit" class="btn-info aa-browse-btn" id="btnPlceOrder">Pay via Insatamojo </button></center>
			  
			  </form>
		  </div>
			
		</div>
	</div>


@endsection
