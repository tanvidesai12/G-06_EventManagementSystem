@extends('master')
@section('contents')
<head>
<style>


	.heading{
		margin:0px auto;
		font-size:65px;
		color:twhite;
		
	
	}
		h2{
		color:black;
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
.ba{
    margin: 0px;
    padding: 0px;
    background-image: url(../images/md2.jpg);
    width: 100%;
	height:2400px;
    background-color: MediumTurquoise;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -1;
    border: 1px solid;
}
.divStyle1 {
    border-radius: 100px;
    width: 85%;
    margin: 100px auto;
    padding: 30px;
    background-color: white;
    opacity: 0.9;
}
.note{
	margin: 0px;
    padding: 0px;
    background-image: url(../images/s.png);
    width: 400px;
	height:350px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -1;
    
}
.h{
	padding: 60px;
	width: 400px;
	height:350px;
}
.head{
	font-size: 25px;
}
</style>
</head>
<div class="ba">
<div class="divStyle1">
<center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
			<div class="carousel-item active">
			<div><h2 class="heading">Band</h2></div>
				<img src="/images/band.jpg" class="d-block w-100" alt="..." style="height:600px;">	
			</div>
			<div class="carousel-item">							
					<h2 class="heading" style="color:black;">DJ</h2>
			  <img src="/images/dj1.jpg" class="d-block w-100" alt="..." style="height:600px">
			</div>
			<div class="carousel-item">
			<h2 class="heading" style="color:black;">Two Men Band</h2>
			  <img src="/images/two.jpg" class="d-block w-100" alt="..." style="height:600px">

			</div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
	  
	</div>
</div>
</div>


<div id="main">
	<div id="container">
		<div class="row">
		@foreach($musics as $music)
		  <div class="col-sm-12 col-md-6 col-lg-4 my-2">
			<div class="card">
			<center><h5 class="card-title">{{$music['cat_name']}}</h5></center>
			<img src="/images/{{$music['music_image']}}" class="card-img-top" alt="..." width="20%" height="300px">
			  <div class="card-body">
				<p class="card-text">{{$music['name']}}</p>
				<p class="card-text">{{$music['discription']}}</p>
			  </div>
			</div>
		  </div>
		  @endforeach
		</div>					  
	</div>
</div>
<center>
<div class="note" style="height:400px">
<div class="h">
<h2>Note:</h2>
<p class="head">For more information regarding any band call us on 9876543212. Thank you Advance:)</p>
</div>
</div>
</center>
</div>
@endsection