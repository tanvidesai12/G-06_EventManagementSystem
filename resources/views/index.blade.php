@extends('master')
@section("contents")
<head>
	<style type="text/css">
	.carousel{
		margin:10px 20px;
		height:600px;
	}
	.carousel-inner{
		width:100%;
		height:600px;
	}
	.about{
		height:100px;
		background-color:#25003e;
		opacity: 0.7;
	}
	.card-deck{
		
		margin:10px;
	}
	.card{
		
		background: #fff;
		box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
		  transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);

	}

	.card:hover{
		 transform: scale(1.05);
		box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
	}
	.events{
		width:26%;
		height:200px;
		margin:-350px auto;

		
	}
	.heading{
		margin:0px auto;
		font-size:65px;
		color:tomato;
		
	
	}
	
	#view_but1{
		margin:30px 85px;
		background-color:#25003e;/*tomato*/
		color:white;
		opacity:0.9;
		width:150px;
		font-size:22px;
		border-radius:15px;
		
	}
	#view_but2{
		margin:30px 85px;
		background-color:darkorange;/*#25003e;*/
		color:white;
		width:150px;
		font-size:22px;
		border-radius:15px;
		
	}
	#gallery h2{
		background-image: linear-gradient(#9932CC,	#DDA0DD);
		color:white;
		font-size:34px;
	
	}
	</style>
</head>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/images/wed5.jpg" class="d-block w-100" alt="..." style="height:600px;">
				<div class="events">
					<div><h2 class="heading">WEDDINGS</h2></div>
					<a href="wedding_event" class="btn" role="button" id="view_but1">View More</a>
				</div>
			</div>
			<div class="carousel-item">
			  <img src="/images/birt1.jpg" class="d-block w-100" alt="..." style="height:600px">
				<div class="events">
					<h2 class="heading" style="color:blue;">BIRTHDAYS</h2>
					<a href="birthday_event" class="btn" role="button" id="view_but2">View More</a>
				</div>
			</div>
			<div class="carousel-item">
			  <img src="/images/corporate.jpg" class="d-block w-100" alt="..." style="height:600px">
				<div class="events">
					<h2 class="heading" style="color:white;">CORPORATE</h2>
					<a href="corporate_event" class="btn" role="button" id="view_but2">View More</a>
				</div>
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
<div>
<!--
<div class="about">
</div>	-->
@include('about')
<h2 style="text-align:center">GALLERY</h2>
<div class="card-deck">
  <div class="card">
    <img src="/images/pic2.jpg" class="card-img-top" alt="..."> 
  </div>
  <div class="card">
    <img src="/images/pic3.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="/images/pic4.jpg" class="card-img-top" alt="...">
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img src="/images/pic5.jpg" class="card-img-top" alt="..."> 
  </div>
  <div class="card">
    <img src="/images/pic2.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="/images/pic3.jpg" class="card-img-top" alt="...">
  </div>
</div>
</div>

@endsection