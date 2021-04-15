@extends('master')
@section("contents")
<head>
	<style type="text/css">
	.carousel{
		margin:10px 20px;
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
	</style>
</head>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/images/pic1.jpg" class="d-block w-100" alt="..." style="height:600px">
    </div>
    <div class="carousel-item">
      <img src="/images/corporate.jpg" class="d-block w-100" alt="..." style="height:600px">
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
