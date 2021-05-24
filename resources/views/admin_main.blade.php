@include("admin_header")
@if (session('message'))
     <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif	
<h1 style="text-align:center">Booking Details</h1>