@extends('master')
@section("contents")

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
@if($revs!=null)
@include('view_reviews',['revs'=>$revs,'id'=>$id,'events'=>$events])
@endif
@endsection
