@extends('contact')
@section("content")
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" height="150px" alt="image"/>
				<h1>Contact Us</h1>
				<h3>Tell us about your event. We would love to hear from you !</h3>
			</div>
		</div>
		<div class="col-md-9">
		<form action="contact_us" method="POST">
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
			<label for="ph_num1">Contact No</label>
			<input type="text" name="ph_num1" class="form-control" id="ph_num1" >
		  </div>
		  <span class="errorMsgs" style="color: red">@error('ph_num1'){{$message}}@enderror</span>
		  <div class="form-group ">
			<label for="ph_num2">Alternate Contact No</label>
			<input type="text" name="ph_num2" class="form-control" id="ph_num2" >
		  </div>
		  <span class="errorMsgs" style="color: red">@error('ph_num2'){{$message}}@enderror</span>
		  <div class="form-group">
			<label for="address">full address</label>
			<input type="text" name="address" class="form-control" id="address" placeholder="Apartment, city,state,pincode...">
		  </div>
		  <span class="errorMsgs" style="color: red">@error('address'){{$message}}@enderror</span>
		  <div class="form-group">
			  <label for="event">Event</label>
			  <select id="event" name="event" class="form-control">
				<option selected>Birthday</option>
				<option>Wedding</option>
				<option>Corperate Event</option>
				<option>Other Small Parties</option>
			  </select>
			</div>
			<span class="errorMsgs" style="color: red">@error('event'){{$message}}@enderror</span>
		  
			<div class="form-group">
			  <label for="discription">Discription</label>
			 <textarea class="form-control" rows="5" name="discription" id="discription" placeholder="tell us what you have in mind,we will make your dream come true"></textarea>
			 </div>
			 <span class="errorMsgs" style="color: red">@error('discription'){{$message}}@enderror</span>
			  <center> <button type="submit" class="btn btn-primary ">Submit Details</button></center>
			  
			  </form>
		  </div>
			
		</div>
	</div>
</div>

@endsection
