@extends('master')
@section("contents")
<head>
	<style type="text/css">
	body{
		background-image:url('/images/bg2.jpg');
		background-repeat:no-repeat;
		background-size:cover;
	}
	#main{
	/*	background-color:#67C8FF;
	background-image:url('/images/bg2.jpg');
		background-repeat:no-repeat;
		background-size:cover;*/
		padding:10px;
	}
	h2{
		color:white;
		text-align:center;
		font-size:40px;
	}
	#container{
		width:90%;
		margin:30px auto;
	}
	.card{
		padding:5px;
	}
	#main2{
	/*	background-image:url('/images/bg.jpg');
		background-repeat:no-repeat;
		background-size:cover;	*/
		width:100%;
		padding:10px;
		
	}
	#chooseVenue{
			margin:50px auto;
			width:45%;
		}
	@media screen and (min-width:1064px){
		#sub{
			width:65%;
			height:500px;
			border:1px solid yellow;
			background-color:white;
			margin:0px auto;
			padding:10px;
		}
		#sub1{
			width:50%;
			height:400px;
			border:1px solid red;
			float:left;
			margin:10px;
			padding:30px;
			 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		}
		#sub2{
			width:42%;
			height:400px;
			border:1px solid red;
			float:left;
			margin:10px;
		}
		
	}
	@media screen and (max-width: 1063px) and (min-width:900px){
		#sub{
			width:80%;
			height:500px;
			border:1px solid yellow;
			background-color:white;
			margin:0px auto;
			padding:20px;
		}
		#sub1{
			width:55%;
			height:400px;
			border:1px solid red;
			float:left;
			margin:10px;
			padding:30px;
			 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		}
		#sub2{
			width:35%;
			height:400px;
			border:1px solid red;
			float:left;
			margin:10px;
		}
		
	}
	@media screen and (max-width: 899px) {
		#sub{
			width:70%;
			border:1px solid yellow;
			background-color:white;
			margin:0px auto;
			padding:10px;
			height:700px;
		}
		#sub1{
			width:100%;
			
			border:1px solid red;
			margin:10px auto;
			padding:30px;
			 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		}
		#sub2{
			width:100%;
			height:200px;
			border:1px solid red;
			float:left;
			margin:10px auto;
		}
		
	}
	</style>
</head>
<body>
@if(session('event'))
    <div class="alert alert-success">
        {{ session('event') }}
    </div>
@endif
<div id="main">
	<h2>Venues</h2>
	<div id="container">
		<div class="row">
		@foreach($venues as $venue)
		  <div class="col-sm-12 col-md-6 col-lg-4 my-2">
			<div class="card">
			<img src="/images/{{$venue['venue_image']}}" class="card-img-top" alt="..." width="20%" height="300px">
			  <div class="card-body">
				<h5 class="card-title">{{$venue['venue_name']}}</h5>
				<p class="card-text">{{$venue['address']}}</p>
				<p class="card-text" style="float:left;"><b>Booking amount:</b>{{$venue['price']}}</p>
				<p class="card-text">&nbsp&nbsp<b>Capacity:</b>{{$venue['capacity']}}</p>
			  </div>
			</div>
		  </div>
		  @endforeach
		</div>					  
	</div>
</div>
<div id="main2">
	<div id="sub">
		<h3 style="text-align:center"><i>Book Your Venue Now:</i></h3>
		<div id="sub1">
			<form action="venues?id={{$id}}" method="post">
				@csrf			
				<div class="form-group">
				  <label for="venue_name" class="form-label"><b>Venue Name:</b></label>			 
				  <select id="venue_name" class="form-control" name="venue_name">			  
					<option selected>Choose Venue</option>
					 @foreach($venues as $venue)
						<option value="{{$venue['id']}}">{{$venue['venue_name']}}</option>
					 @endforeach
				  </select>				 
				</div>			
				<div class="form-group">
					<label for="no_of_guests" class="form-label"><b>No. of Guests:</b></label>
					<input type="number" class="form-control" id="no_of_guests" name="no_of_guests" min="70" max="2000" required>
				</div>
				<div id="chooseVenue">
					<button type="submit" class="btn btn-primary" style="font-size:20px;">BOOK VENUE</button>
				 </div>
				</form>
		</div>
		<div id="sub2">
		</div>
	</div>


</div>
</body>


@endsection
