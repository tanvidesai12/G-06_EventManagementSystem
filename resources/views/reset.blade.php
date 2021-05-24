@extends('master')
@section('contents')
<style type="text/css">
    .divStyle {
  border-radius: 100px;
  width:50%;
  margin: 100px auto;
  padding: 30px;
  background-color: white;
  opacity: 0.9;
}
.div1 {
  margin: 0px;
  padding: 0px;
  background-image: url("../images/bg.jpg");
  width: 100%;
  background-color: MediumTurquoise; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  z-index: -1;
  border:1px solid;
}
button.btnStyle {
  border-radius: 25px;
  background-color: #25003e;
  border: none;
  color: white;
  padding: 10px 42px;
  text-align: center;
  text-decoration: none;
  transition-duration: 0.4s;
}

button.btnStyle:hover {
  background-color: DarkSlateBlue; /* Green */
  color: white;
}
h2.h2Style {
  text-shadow: 2px 2px;
  text-align: center;
  color:#25003e;
  margin-bottom: 15px;
}
.input-container { 
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  border-bottom:1px solid lightgrey;
  transition: 0.4s ease-in-out;
}

.icon {
  padding: 15px;
  color: #25003e;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width:100%;
  padding: 10px;
  outline: none;
  border:none;
}
.input-container:hover {
  box-shadow: 5px 10px 18px lightgrey;
  border-bottom: none;
}
</style>
<div class="div1">
@if($errors->any())
  <div class="alert alert-danger">
          {{ $errors->first() }}
  </div>
@endif
<div class="divStyle">
<h2 class="h2Style">Reset Password</h2>
<form method="POST" action="/reset-password">
   @csrf
   <input type="hidden" name="token" value="{{ $token }}">
   <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address:</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
   </div>

   <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
   </div>
   <center><button type="submit" class="btnStyle">Reset Password</button></center>
</form>
</div>
</div>
@endsection