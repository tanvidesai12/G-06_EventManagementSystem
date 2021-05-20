@include("admin_header")

<head>
	<style>
	#container{
		width:45%;
		height:545px;
		border:1px solid yellow;
		margin:30px auto;
		padding:30px;
		border-radius:20px;
		background-image: linear-gradient(to right,#ff5f6d ,#ffc371 ); 
	}
	h3{
		text-align:center;
		margin-bottom:20px;
	}
	label{
		font-weight:bold;
	}
	#addButton{
		
		margin:140px auto;
	
		width:30%;
		
		
	}
	
	.cap{
		width:40%;
		float:left;
		
		
	}
	
	.venue_img{
		margin-left:25px;
		float:left;
		width:45%;
	}
	</style>
</head>
<body>
	<div id="container">
		<h3>Add a venue</h3>
		<form action="addVenue" method="POST" enctype="multipart/form-data">
		@csrf
		  <div class="form-group">
			<label for="venue_name">Venue Name:</label>
			<input type="text" class="form-control" id="venue_name" name="venue_name" placeholder="Enter venue name" required>
			<span style="color:red">@error('venue_name'){{$message}}@enderror</span>
		  </div>
		  <div class="form-group">
			<label for="address">Venue Address:</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="Enter Venue Address:" required>
			<span style="color:red">@error('address'){{$message}}@enderror</span>
		  </div>
		   <div class="form-group price">
			<label for="price">Price:</label>
			<input type="number" class="form-control" id="price" name="price" min="20000" max="80000" required>
		  </div>
		   <div class="form-group cap">
			<label for="capacity">Capacity:</label>
			<input type="number" class="form-control" id="capacity" name="capacity" min="100" max="5000" required>
		  </div>
		 
		  <div class="form-group venue_img">
			<label for="venue_image">Choose Venue Image:
			<input type="file" class="form-control-file" id="venue_image" name="venue_image">
			<span style="color:red">@error('venue_image'){{$message}}@enderror</span>
		  </div>
		  <div id="addButton">
			<button  class="btn btn-primary" type="submit" style="font-size:20px;">ADD VENUE</button>
		  </div>
		</form>
		
			
	</div>
</body>
