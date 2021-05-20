@include("admin_header")

<head>
	<style>
	#container{
		width:42%;
		border:1px solid yellow;
		margin:100px auto;
		padding:30px;
		border-radius:20px;
		background-image: linear-gradient(to right,#ff5f6d ,#ffc371 ); 
	}
	h3{
		text-align:center;
		margin-bottom:40px;
	}
	label{
		font-weight:bold;
	}
	#chooseVenue{
		
		margin:50px auto;
		width:30%;
	}
	
	
	
	</style>
</head>
<body>
	<div id="container">
		<h3>Delete a venue</h3>
	
		<form action="removeVenue?" method="post">
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
				
				<div id="chooseVenue">
					<button type="submit" class="btn btn-primary" style="font-size:15px;">REMOVE VENUE</button>
				 </div>
			<form>
	</div>
</body>
