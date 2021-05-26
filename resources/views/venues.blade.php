@extends('master')
@section("contents")
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
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
			border:6px solid yellow;
			margin:0px auto;
			padding:10px;
			background-image:url('/images/bg_form.jpg');
			background-repeat:no-repeat;
			background-size:cover;
		
			
		}
		#sub1{
			width:50%;
			height:400px;
			border:6px solid #faaca8;
			float:left;
			margin:10px;
			padding:30px;
			 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		}
		#mymap{
			width:43%;
			height:400px;
			border:6px solid #ddd6f3;
			float:left;
			margin:10px;
		}
			
	}
	@media screen and (max-width: 1063px) and (min-width:900px){
		#sub{
			width:80%;
			height:500px;
			border:6px solid yellow;
			margin:0px auto;
			padding:20px;
			background-image:url('/images/bg_form.jpg');
			background-repeat:no-repeat;
			background-size:cover;
		}
		#sub1{
			width:55%;
			height:400px;
			border:6px solid #faaca8;
			float:left;
			margin:10px;
			padding:30px;
			 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		}
		#mymap{
			width:38%;
			height:400px;
			border:6px solid #ddd6f3;
			float:left;
			margin:10px;
		}	
		
	}
	@media screen and (max-width: 899px) {
		#sub{
			width:70%;
			border:6px solid yellow;
			margin:0px auto;
			padding:10px;
			height:700px;
			background-image:url('/images/bg_form.jpg');
			background-repeat:no-repeat;
			background-size:cover;
		}
		#sub1{
			width:100%;
			
			border:6px solid #faaca8;
			margin:10px auto;
			padding:30px;
			 background-image: linear-gradient(to right,#ddd6f3  ,	#faaca8); 
		}
		#mymap{
			width:100%;
			height:210px;
			border:6px solid #ddd6f3;
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
		<div id="mymap">
			<script type="text/javascript">
				var locations = <?php print_r(json_encode($venues)) ?>;
				var mymap = new GMaps({
				  el: '#mymap',
				  lat: 15.29,
				  lng: 73.96,
				  zoom:6
				});
				$.each( locations, function( index, value ){
					mymap.addMarker({
					  lat: value.lat,
					  lng: value.lng,
					  title: value.venue_name,
					  click: function(e) {
						alert(value.venue_name);
					  }
					});
					
			   });
			</script>
		</div>
	</div>


</div>
</body>


@endsection
