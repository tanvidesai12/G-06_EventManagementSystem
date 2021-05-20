
@include("admin_header")

		<style type="text/css">
	.cont {
		margin: 0px auto;
		width: 70%;
		background-color: #00FA9A;
		border:rounded-left, solid;
	}
	.cont:hover{
background: #00cca3; 
}
	.pstyle {
		margin-top: 20px;
	}
	
	.deco{
		font-weight:bold;
		margin:15px auto;
	}

</style>
<h2 class="text-center" style="text-shadow: 2px 2px;">Contact Enquiry Details</h2>
@foreach($contacts as $contact)
<div class="shadow p-3 mb-5 rounded cont">

<center><div id="infinity"></div></center>
	<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> {{ $contact['name'] }} </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Email:</span> {{ $contact['email'] }} </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Contact No:</span> {{$contact['ph_num1']}}</div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Event</span> {{$contact['event']}}</div>
	<p class="pstyle"><span class="font-weight-bold">Discription:</span> {{$contact['discription']}}</p>
</div>
<center><div class="deco">~~O~~</div></center>
@endforeach