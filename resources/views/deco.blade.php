@extends('master')
@section("contents")
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>

	
		
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

		 .ba{
    margin: 0px;
    padding: 0px;
    background-image: url(../images/md2.jpg);
    width: 100%;
	height:2000px;
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
.space{
		padding:15px;
	}
	@media screen and (max-width: 800px) {
  .ba {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }

			
</style>
</head>
<div class="ba">
<div class="space">
	<h2 style="text-align:center;color:white">Birthday Decoration</h2>
</div>
	<div class="card-deck">
		<div class="card">
			<img src="/images/deco21.png" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/deco25.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/deco27.jpg" class="card-img-top" alt="...">
		</div>
	</div>

	<div class="card-deck">
		<div class="card">
			<img src="/images/deco26.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/deco28.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/deco23.jpg" class="card-img-top" alt="...">
		</div>
	</div>

<div class="space">
	<h2 style="text-align:center;color:white">Wedding Decoration</h2>
</div>
	<div class="card-deck">
		<div class="card">
			<img src="/images/deco11.jpg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/deco12.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/deco13.jpg" class="card-img-top" alt="...">
		</div>
	</div>

	<div class="card-deck">
		<div class="card">
			<img src="/images/deco14.jpeg" class="card-img-top" alt="..."> 
		</div>
		<div class="card">
			<img src="/images/deco15.jpg" class="card-img-top" alt="...">
		</div>
		<div class="card">
			<img src="/images/deco17.jpg" class="card-img-top" alt="...">
		</div>
	</div>

<center>
<div class="note" style="height:400px">
<div class="h">
<h2>Note:</h2>
<p class="head">For any information regarding any event decoration call us on 9876543232. Thank you in Advance :)</p>
</div>
</div>
</center>
</div>
	@endsection