@extends("master")
@section("contents")
<head>
	<style>
	body{
		width:100%;
		background-image:url('/images/booking_event.jpg') ;
		background-repeat:no-repeat;
		
		/*opacity:0.9;*/
		z-index:-1;
		height:500px;
	}
	
	#details{
		width:50%;
		
		padding:40px;
		margin:50px auto;
		 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		/* background-image: linear-gradient(to right,#c33764,	#1d2671); */
		
	}
	
	.form-label{
		font-weight:bold;
	}
	.form-control{
		width:100%;
	}
	.butt{
		margin:10px auto;
	}
	</style>
</head>
<body>
<div id="details">
		<h2 style="text-align:center">Event Details:</h2>
		<form action="booking_details" method="POST">
		 @csrf
			<div class="form-row">
				<div class="form-group col-12">
					<label for="fullname" class="form-label">Name:</label>
					<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Your Full Name" required>
				</div>
				<div class="form-group col-12">
					<label for="email" class="form-label">Email:</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Your email id" required>
				</div>	
				
				<div class="form-group col-sm-12 col-md-6">
					<label for="event_type" class="form-label">Choose an Event:</label>
					<select id="event_type" name="event_type" class="form-control">
					  <option selected>Choose...</option>
					  <option>Birthday</option>
					  <option>Wedding</option>
					  <option>Corporate</option>
					</select>
				</div>
				<div class="form-group col-sm-12 col-md-6">
					<label for="phone" class="form-label">Phone No:</label>
					<input type="tel" class="form-control" id="phone" name="phone" placeholder="Your mobile no." required>
				</div>
				<div class="form-group datetimepicker col-sm-12  col-md-6">
					<label for="date" class="form-label">Date:</label>
					<?php 
						$time=time();
						$time=$time+15*(24*3600);
					?>
					<input type="date" class="form-control " id="date" name="event_date" min="<?= date("Y-m-d",$time)?>"  required>
				</div>
				<div class="form-group col-sm-12 col-md-6">
					<label for="time" class="form-label">Time:</label>
					<input type="time" class="form-control" id="time" name="event_time" required>
				</div>
					<div class="butt">
					<button type="submit" class="btn btn-primary">NEXT</button>
					
				  </div>
		  </div>
		</form>
	</div>
@endsection

 </body>
