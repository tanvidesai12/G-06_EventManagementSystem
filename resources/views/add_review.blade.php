@extends('master')
@section('contents')
<style type="text/css">
	.reviewFormStyle {
		padding: 10px;
		text-align: center;
		width: 80%;
		margin: 20px auto;
		background-color: lightblue;
		border-radius: 5px;
	}
	.reviewFormFieldsetStyle {
		border: 1px solid;
		padding: 50px;
	}
	.reviewFormLegendStyle {
		width: auto;
		font-style: italic;
		text-shadow: 1px 1px;
	}
</style>
<form action="add_review?bkgId={{ $bId }}" method="POST" class="reviewFormStyle">
	<fieldset class="reviewFormFieldsetStyle">
		@csrf
		<legend class="reviewFormLegendStyle">Add your review:</legend>
		<p class="font-weight-lighter">Your review is important to us and helps us provide you with better service. Please take a few minutes to give us a review.</p>
		<div class="form-group" style="text-align: left;">
			<label for="review" class=" d-inline-block">Your review:</label>
			<textarea class="form-control d-inline-block" rows="5" id="review" name="review"></textarea>
		</div>
		<button type="submit" class="btn btn-light" style="margin-top: 20px;">Submit Review</button>
	</fieldset>	
</form>
@endsection