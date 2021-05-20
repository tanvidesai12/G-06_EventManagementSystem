
@include("admin_header")
<!--
<table border="1">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Feedback</td>
	</tr>
	@foreach($feedbacks as $feedback)
	<tr>
		<td>{{$feedback['name']}}</td>
		<td>{{$feedback['email']}}</td>
		<td>{{$feedback['feedback']}}</td>
	</tr>
	@endforeach
	</table>
		-->
		<style type="text/css">
	.feed{
		margin: 0px auto;
		width: 70%;
		background: linear-gradient(to bottom, #ffff66 0%, #00ffff 100%);
		
	}
		.feed:hover{
background: linear-gradient(to bottom, #00ffff 0%, #99ff33 100%);
}
	.pstyle {
		margin-top: 20px;
	}
	.deco{
		font-weight:bold;
		margin:20px auto;
		
	}
</style>
<h2 class="text-center" style="text-shadow: 2px 2px;">Feedbacks</h2>
@foreach($feedbacks as $feedback)
<div class="shadow p-3 mb-5 rounded feed">
<!--<img src="/images/2.jpg" alt="..." style="height:60px;">-->
	<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> {{ $feedback['name'] }} </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Email:</span> {{ $feedback['email'] }} </div>
	<p class="pstyle"><span class="font-weight-bold">Feedbacks:</span> {{$feedback['feedback']}}</p>
</div>
<center><div class="deco">~~O~~</div></center>
@endforeach