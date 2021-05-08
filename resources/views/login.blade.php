@extends('master')
@section('contents')
<div class="div1">
<div class="divStyle">
<h2>Sign In</h2>

<form action="login" method="POST">
	@csrf
<div class="input-container">
	<i class="fa fa-envelope icon"></i>
	<input type="email" id="email" class="input-field" name="email" placeholder="Email">
</div>
<!-- <span class="errorMsgs">@error('email'){{$message}}@enderror</span> -->
<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input type="password" id="password" class="input-field" name="password" placeholder="Password">
</div>
<!-- <span class="errorMsgs">@error('password'){{$message}}@enderror</span> -->
<center><button type="submit">Sign In</button></center>
<p>Don't have an account?Click here to <span><a href="signup">Sign Up</a></span></p>
</form>
</div>
</div>
@endsection
