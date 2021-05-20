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
<h2 class="text-center" style="text-shadow: 2px 2px;">Reviews</h2>
@foreach($reviews as $key => $rev)
<div class="shadow p-3 mb-5 rounded rev">
	<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> {{ $events[$key]->fullname }} </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Event:</span> {{ $events[$key]->event_type }} </div>
	<p class="pstyle"><span class="font-weight-bold">Review:</span> {{ $rev['review'] }}</p>
</div>
@endforeach