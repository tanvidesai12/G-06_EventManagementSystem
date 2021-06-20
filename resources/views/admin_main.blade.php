@include("admin_header")
		<style type="text/css">
	.feed{
		margin: 0px auto;
		width: 70%;
		background: linear-gradient(to bottom, #0099cc 0%, #ffccff 100%);
		
	}
		.feed:hover{
		background: linear-gradient(to bottom, #ffccff 0%, #0099cc 100%);
}
	.pstyle {
		margin-top: 20px;
		text-indent: 25px;
	}
	.deco{
		font-weight:bold;
		margin:20px auto;
		
	}
	.space{
		padding:15px;
	}
</style>
@if (session('message'))
     <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif	
@if($errors->any())
	<div class="alert alert-danger m-0" >
		{{ $errors->first() }}
	</div>
@endif
<div class="space">
<h1 style="text-align:center">Booking Details</h1>
</div>
@foreach($data as $row)
<div class="shadow p-3 mb-5 rounded feed">
<!--<img src="/images/2.jpg" alt="..." style="height:60px;">-->
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Name:</span> {{ $row->fullname }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> No Of Guest:</span> {{ $row->no_of_guests }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Booking Status:</span> {{ $row->booking_status }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Total Amount:</span> {{ $row->total_amount }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Event:</span> {{ $row->event_type }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Event Date:</span> {{ $row->event_date }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Event Time:</span> {{ $row->event_time }} </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Venue:</span> {{ $row->venue_name }} </div>
	@if($row->booking_status!='Cancelled' && $row->booking_status!='Confirmed' && $row->booking_status!='Rejected')
	<div class="text-center m-3">
		<a href="confirm_bkg?bkgId={{ $row->id }}" class="btn btn-secondary d-inline-block m-4">Confirm Booking</a>
		<a href="reject_bkg?bkgId={{ $row->id }}" class="btn btn-secondary d-inline-block m-4">Reject booking</a>
	</div>
	@endif
</div>
<center><div class="deco">~~O~~</div></center>
@endforeach