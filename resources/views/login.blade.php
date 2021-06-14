@extends('master')
@section('contents')
<div class="div1">
@if($errors->any())
	<div class="alert alert-danger">
	    <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
	</div>
@endif
@if (session('message'))
     <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
<div class="divStyle">
<h2 class="h2Style">Sign In</h2>

<form action="login" method="POST">
	@csrf
<div class="input-container">
	<i class="fa fa-envelope icon"></i>
	<input type="email" id="email" class="input-field" name="email" placeholder="Email">
</div>
<span class="errorMsgs">@error('email'){{$message}}@enderror</span>
<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input type="password" id="password" class="input-field" name="password" placeholder="Password">
</div>
<span class="errorMsgs">@error('password'){{$message}}@enderror</span> 
<center><button class="btnStyle" type="submit">Sign In</button></center>
<center><a href="forget-password">Forgot your password?</a></center>
<p class="paraStyle">Don't have an account?Click here to <span><a class="anchrStyle" href="signup">Sign Up</a></span></p>
</form>
</div>
</div>
@endsection
