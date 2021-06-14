@extends('master')
@section('contents')
<div class="div1">
<div class="divStyle">
<h2 class="h2Style">Sign Up</h2>

<form action="signup" method="POST">
	@csrf
<div class="input-container">
	<i class="fa fa-user icon"></i>
	<input type="name" id="name" class="input-field" name="name" placeholder="Full Name">
</div>
<span class="errorMsgs">@error('name'){{$message}}@enderror</span>
<div class="input-container">
	<i class="fa fa-envelope icon"></i>
	<input type="email" id="email" class="input-field" name="email" placeholder="Email">
</div>
<span class="errorMsgs">@error('email'){{$message}}@enderror</span>
<div class="input-container">
	<i class="fa fa-phone icon"></i>
	<input type="text" id="phone_number" class="input-field" name="phone_number" placeholder="Phone Number">
</div>
<span class="errorMsgs">@error('phone_number'){{$message}}@enderror</span>
<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input type="password" id="password" class="input-field" name="password" placeholder="Password">
</div>
<span class="errorMsgs">@error('password'){{$message}}@enderror</span>
<center><button class="btnStyle" type="submit">Sign Up</button></center>
<p class="paraStyle">Already have an account?Click here to <span><a class="anchrStyle" href="login">Sign in</a></span></p>
</form>
</div>
</div>
@endsection
