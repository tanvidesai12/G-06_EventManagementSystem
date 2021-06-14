@extends('master')
@section("contents")
<head>
	<style>
		#heading{
			margin:-280px auto;
			font-size:60px;
			font-weight:bold;
			
		}
		.divstyle{
		position:relative;
		opacity:0.4;
		width:30%;
		margin:0px auto;
	}
		
</style>
</head>
<div id="info">
	<img src="/images/cor4.jpg" class=" w-100" alt="..." style="height:500px;">
	<div class="shadow mb-5 bg-white rounded divstyle"><h2 id="heading" style="color:#CD5C5C;">CORPORATE</h2></div>
</div>
<div id="sub_con">
	<p>
		Event 365 have produced some amazing events and our reputation is based on our ability to exceed our clients’ expectations while leaving guests with the 'wow' factor. 
		Goa has become the ideal destination for the most important day in a couple’s life together. Goa offers unique backdrops that have made this beautiful small state of India the most sought after wedding destination. Your special day becomes that much more special. Wedding ceremonies, destination excursions and guest performers are all possible with Event 360.
		Our team can incorporate all of your religious and cultural requirements into one package.
	</p>
</div>
<div id="photos">
	<h2 style="text-align:center;color:white">GALLERY</h2>

	<div class="card-deck">
		<div class="card">
			<img src="/images/cor8.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/cor3.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/cor1.jpg" class="card-img-top" alt="...">
		</div>
	</div>

	<div class="card-deck">
		<div class="card">
			<img src="/images/cor5.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/cor6.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/cor7.jpg" class="card-img-top" alt="...">
		</div>
	</div>

	
</div>
	
<div id="subdivison">
	<h4 style="text-align:center;">Deliver High Quality Management Solutions for your Conferences</h4>
	<div class="sub_div1">
		<ul>
			<li>Conceptualization of the Conference</li>
			<li>Hotel Accommodation</li>
			<li>Sound and Lights</li>
			<li>Decoration / Floral Arrangements</li>
			<li>Exhibition Designing & Installation</li>
			
			
			
		</ul>
	</div>
	<div class="sub_div2">
		<ul>
			<li>Consumer Exhibitions</li>
			<li>Food and Beverage</li>
			<li>Product Launch</li>
			<li>Award Ceremonies & Gala Dinners</li>
			<li>Photography and Videography</li>
			<li>Mementos/li>
		</ul>
	</div>
</div>
@endsection