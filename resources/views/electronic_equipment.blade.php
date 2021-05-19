@extends('master')
@section("contents")
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1>Electronics</h1>
@endsection