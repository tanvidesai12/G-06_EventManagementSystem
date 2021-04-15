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
		<form>
		  <div class="form-row">
		  <div class="form-group col-md-6">
			  <label for="inputName4">Name</label>
			  <input type="name" class="form-control" id="inputName4">
			</div>
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Email</label>
			  <input type="email" class="form-control" id="inputEmail4">
			</div>
			
		  </div>
		  
		  <div class="form-group ">
			<label for="inputContactNo1">Contact No</label>
			<input type="text" class="form-control" id="inputContactNo1" >
		  </div><div class="form-group ">
			<label for="inputContactNo2">Alternate Contact No</label>
			<input type="text" class="form-control" id="inputContactNo2" >
		  </div>
		  <div class="form-group">
			<label for="inputAddress2">full address</label>
			<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, city,state,pincode...">
		  </div>
		  <div class="form-group">
			  <label for="inputevent">Event</label>
			  <select id="inputevent" class="form-control">
				<option selected>Birthday</option>
				<option>Wedding</option>
				<option>Corperate Event</option>
				<option>Other Small Parties</option>
			  </select>
			</div>
		  
			<div class="form-group">
			  <label for="inputDiscription">Discription</label>
			 <textarea class="form-control" rows="5" id="discription" placeholder="tell us what you have in mind,we will make your dream come true"></textarea>
			 </div>
			  <center> <button type="submit" class="btn btn-primary ">Submit Details</button></center>
		  </div>
			
		</div>
	</div>
</div>

@endsection
