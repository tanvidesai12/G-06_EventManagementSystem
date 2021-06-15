@extends('master')
@section("contents")
<head>
	<style>
		#info{		
			width:100%;
			height:500px;
			text-align:center;

		}
		#heading{
			margin:-280px auto;
			font-size:60px;
			font-weight:bold;
			
		}
	
		#sub_con{
				
				width:100%;
				padding:30px;
				margin-top:10px;
			}
		#photos{
				width:100%;	
				background-color:#343434;
				margin:10px auto;
				padding:10px;
			}
			
		.card-deck{
				margin:20px;
			
			}
		.card-img-top{
				height:310px;
			}
		p{
				text-align:justify;
				
				font-size:18px;
			/*	 text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;*/
				text-shadow:0 0 0 #f00, 0 0 1px transparent;
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
		.sub_div1{
				
				float:left;
				width:50%;
				padding:10px;
			
				
			}
		.sub_div2{
				
				padding:10px;
			
				
			
			}	
		@media (min-width: 801px)  {
				div#info {
				  display: block;
				}
				div.sub_div1{
					width:50%;
				}
				.divstyle{
					position:relative;
					opacity:0.9;
					width:45%;
					margin:0px auto;
					}
			}
			
		@media (max-width: 800px) and (min-width: 601px) {
					div#info {
					  display: block;
					}
					.divstyle{
					position:relative;
					opacity:0.9;
					width:60%;
					margin:0px auto;
					}
					

			 }
		 @media screen and (max-width:600px){
				 div#info {
					  display: none;
					}
					div.sub_div1{
					min-width:100%;
					
				}
				

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