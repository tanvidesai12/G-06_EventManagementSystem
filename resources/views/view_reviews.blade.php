<style>
	.carousel-inner img {
		width: 100%;
		height: 350px;
	}
	.captionHeader {
		top: 0;
    	bottom: auto;
    	text-shadow: 2px 2px;
	}
</style>
<div id="demo" class="carousel slide" data-ride="carousel"  style="width: 85%;height: 350px; margin: 20px auto;">
  <ul class="carousel-indicators">
    @foreach($data as $dt)
      @if($cnt==0)
      <li data-target="#demo" data-slide-to="{{ $cnt++ }}" class="active"></li>
      @else
      <li data-target="#demo" data-slide-to="{{ $cnt++ }}"></li>
      @endif
    @endforeach
  </ul>
  <div class="carousel-inner">
    @foreach($data as $dt)
      @if($id==1)
        <div class="carousel-item active" id="{{ $id++ }}">
      @else
        <div class="carousel-item" id="{{ $id++ }}">
      @endif
      <img src="images/reviews_bg.jpg" alt="Review1" width="700" height="100">
      <h4 class="carousel-caption captionHeader font-italic">What People Say About Us</h4>
      <div class="carousel-caption">
        <blockquote class="blockquote">"{{ $dt->review }}"</blockquote>
        <h5><span class="badge badge-warning">{{ $dt->event_type }}</span></h5>
        <p>-{{ $dt->fullname }}</p>
      </div>   
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
