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
		height:500px;
		padding:30px;
		border:1px solid blue;
		margin:50px auto;
		 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		/* background-image: linear-gradient(to right,#c33764,	#1d2671); */
		
	}
	
	.form-control{
		width:100%;
	}
	.butt{
		margin:0px auto;
	}
	</style>
</head>

<div id="details">
		<h2 style="text-align:center">Event Details:</h2>
		<form>
			<div class="form-row">
				<div class="form-group col-12">
					<label for="fullname" class="form-label">NAME:</label>
					<input type="text" class="form-control" id="fullname" placeholder="Your Full Name" required>
				</div>
				<div class="form-group col-12">
					<label for="email" class="form-label">EMAIL</label>
					<input type="email" class="form-control" id="email" placeholder="Your email id" required>
				</div>	
				<div class="form-group col-12">
					<label for="phone" class="form-label">PHONE NO:</label>
					<input type="tel" class="form-control" id="phone" placeholder="Your mobile no." required>
				</div>
				<div class="form-group col-12">
					<label for="inputState" class="form-label">CHOOSE AN EVENT:</label>
					<select id="inputState" class="form-control">
					  <option selected>Choose...</option>
					  <option>...</option>
					</select>
				</div>

					<div class="butt">
					<a href="venue" class="btn btn-primary">NEXT</a>
				  </div>
		  </div>
		</form>
	</div>
@endsection