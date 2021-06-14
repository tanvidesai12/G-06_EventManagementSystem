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
	<img src="/images/wed_dec.jpg" class=" w-100" alt="..." style="height:500px;">
	<div class="shadow mb-5 bg-white rounded divstyle"><h2 id="heading" style="color:#CD5C5C;">WEDDINGS</h2></div>
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
			<img src="/images/deco2.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/wed1.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/chairs.jpeg" class="card-img-top" alt="...">
		</div>
	</div>

	<div class="card-deck">
		<div class="card">
			<img src="/images/chairs2.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/wed2.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/wed3.jpg" class="card-img-top" alt="...">
		</div>
	</div>
	<div class="card-deck">
		<div class="card">
			<img src="/images/w31.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/open_air.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/deco1.jpg" class="card-img-top" alt="...">
		</div>
	</div>
	<div class="card-deck">
		<div class="card">
			<img src="/images/entrance.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/deco4.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/haldi.jpg" class="card-img-top" alt="...">
		</div>
	</div>
</div>
	
<div id="subdivison">
	<h4 style="text-align:center;">We extend the following services for your dream wedding in Goa:</h4>
	<div class="sub_div1">
		<ul>
			<li>Wedding Venue Selection</li>
			<li>Wedding Stage</li>
			<li>Sound and Lights</li>
			<li>Wedding Decoration / Floral Arrangements</li>
			<li>Wedding Car / Carriage</li>
			<li>Wedding Bands / DJ / Dancer / Emcee</li>
			<li>Wedding Photography & Videography</li>
			
			
		</ul>
	</div>
	<div class="sub_div2">
		<ul>
			<li>Arrangement of Hotel Accommodation</li>
			<li>Food and Beverage</li>
			<li>Bridal Hairstyling / Make Up</li>
			<li>Varmala / Mandap / Reception / Tilak / Vidai Ceremony</li>
			<li>Mehendi / Sangeet Functions</li>
			<li>Engagement Ceremony</li>
			<li>Fireworks / Pyrotechnics</li>
		</ul>
	</div>
</div>
@endsection