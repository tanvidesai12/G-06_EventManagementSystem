@extends('master')
@section("contents")
<head>
	<style>
		.carousel{
		margin:10px 15px;
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
@media screen and (min-width:701px){
		.events{
			width:42%;
			height:200px;
			margin:-350px auto;
		
		}
		
		.heading{
			margin:0px auto;
			font-size:50px;
			text-align:center;
			
		
		}
		#view_but1{
			margin:25px 42%;
			background-color:#25003e;/*tomato*/
			color:white;
			opacity:0.9;
			width:120px;
			font-size:18px;
			border-radius:15px;
			
		}
		.view_but2{
			margin:25px 42%;
			background-color:darkorange;/*#25003e;*/
			color:white;
			width:120px;
			font-size:18px;
			border-radius:15px;
			
		}
		
		
		
	}
	@media screen and (max-width: 700px) and (min-width:480px){
		.events{
			width:62%;
			height:200px;
			margin:-350px auto;
		
		}
		
		.heading{
			margin:0px auto;
			font-size:50px;
			text-align:center;
			
		
		}
		#view_but1{
			margin:25px 35%;
			background-color:#25003e;/*tomato*/
			color:white;
			opacity:0.9;
			width:120px;
			font-size:18px;
			border-radius:15px;
			
		}
		.view_but2{
			margin:25px 35%;
			background-color:darkorange;/*#25003e;*/
			color:white;
			width:120px;
			font-size:18px;
			border-radius:15px;
			
		}
		
	}


	@media screen and (max-width:479px){
		.events{
			width:85%;
			height:200px;
			margin:-350px auto;
		
		}
		
		.heading{
			margin:0px auto;
			font-size:35px;
			text-align:center;
			
		
		}
		#view_but1{
			margin:25px 28%;
			background-color:#25003e;/*tomato*/
			color:white;
			opacity:0.9;
			width:120px;
			font-size:18px;
			border-radius:15px;
			
		}
		.view_but2{
			margin:25px 28%;
			background-color:darkorange;/*#25003e;*/
			color:white;
			width:120px;
			font-size:18px;
			border-radius:15px;
			
		}
	}
	
	#gallery h2{
		background-image: linear-gradient(#9932CC,	#DDA0DD);
		color:white;
		font-size:34px;
	
	}
	.divstyle{
		position:relative;
		opacity:0.9;
	}
	</style>
</head>
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if(session('cancelled'))
    <div class="alert alert-success">
        {{ session('cancelled') }}
    </div>
@endif
@if($errors->any())
	<div class="alert alert-danger">
	        {{ $errors->first() }}
	</div>
@endif
@if (session('message'))
     <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
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
					<div class="shadow mb-5 bg-white rounded divstyle"><h2 class="heading" style="color:red;">WEDDINGS</h2></div>
					<a href="wedding_event" class="btn" role="button" id="view_but1">View More</a>
				</div>
			</div>
			<div class="carousel-item">
			  <img src="/images/birt1.jpg" class="d-block w-100" alt="..." style="height:600px">
				<div class="events">
					<div class="shadow mb-5 bg-white rounded divstyle"><h2 class="heading" style="color:blue;">BIRTHDAYS</h2></div>
					<a href="birthday_event" class="btn view_but2" role="button">View More</a>
				</div>
			</div>
			<div class="carousel-item">
			  <img src="/images/corporate.jpg" class="d-block w-100" alt="..." style="height:600px">
				<div class="events">
					<div class="shadow mb-5 bg-white rounded divstyle"><h2 class="heading" style="color:#C04000;">CORPORATE</h2></div>
					<a href="corporate_event" class="btn view_but2" role="button">View More</a>
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
@include('about')
<div id="gallery">
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
@if($data->isNotEmpty())
@include('view_reviews',['data'=>$data,'id'=>$id])
@endif
@endsection
