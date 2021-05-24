@extends('master')
@section('contents')
<div class="div1">
@if (session('message'))
   <div class="alert alert-success" role="alert">
      {{ session('message') }}
  </div>
@endif
<div class="divStyle">
<h2 class="h2Style">Reset Password</h2>
<form method="POST" action="forget-password">
    @csrf
      <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address:</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <center><button type="submit" class="btnStyle">Send Password Reset Link</button></center>

</form>
</div>
</div>
@endsection