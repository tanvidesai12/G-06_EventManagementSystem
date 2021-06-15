@include("admin_header")
<style type="text/css">
	.rev {
		margin: 0px auto;
		width: 70%;
		background-color: lightblue;
	}
	.pstyle {
		margin-top: 20px;
	}
</style>
<h2 class="text-center m-3" style="text-shadow: 2px 2px;">Reviews</h2>
@if($reviews==null)
	<div class="jumbotron m-5">
	  <h3 class="text-center">There are no reviews yet!</h3>
	</div>
@else
	@foreach($reviews as $rev)
	<div class="shadow p-3 mb-5 rounded rev">
		<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> {{ $rev->fullname }} </div>
		<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Event:</span> {{ $rev->event_type }} </div>
		<p class="pstyle"><span class="font-weight-bold">Review:</span> {{ $rev->review }}</p>
	</div>
@endforeach
@endif