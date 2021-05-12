@extends('master')
@section('contents')
<div class="contents">
	<img src="images/cateringBackground.jpg" width="100%" height="600px"/>
	<h1 class="text">Swaad Caterers</h1>
	<div class="design">~o~</div>
</div>
<div class="outerDiv">
	<div class="innerDiv">
		<h3 class="h3Style">Food Menu</h3>
		<ul class="nav nav-tabs flex-column flex-sm-row">
		  <li class="nav-item">
		    <a class="flex-sm-fill nav-link active" data-toggle="tab" href="#packages">Choose Packages</a>
		  </li>
		  <li class="nav-item">
		    <a class="flex-sm-fill nav-link" data-toggle="tab" href="#planmenu">Plan Menu</a>
		  </li>
		</ul>

		<div class="tab-content">
		  <div class="tab-pane container active menu" id="packages">
			<h4 class="h4Style">Packages:</h4>	
			<p class="title">Veg packages:</p>
			<div class="box">
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Silver Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						@foreach($vegSilverPkg as $silverPkgDish)
						<li class="list-group-item">{{ $silverPkgDish->dish_name }}</li>
						@endforeach
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Ruby Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush"  style="padding: 5px;">
						@foreach($vegRubyPkg as $rubyPkgDish)
						<li class="list-group-item">{{ $rubyPkgDish->dish_name }}</li>
						@endforeach
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Gold Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						@foreach($vegGoldPkg as $goldPkgDish)
						<li class="list-group-item">{{ $goldPkgDish->dish_name }}</li>
						@endforeach
					</ul> 
				</div>
			</div> 	
			<p class="title">Non-veg packages:</p>
			<div class="box">
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Silver Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						@foreach($nonVegSilverPkg as $silverNonVegPkgDish)
						<li class="list-group-item">{{ $silverNonVegPkgDish->dish_name }}</li>
						@endforeach
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Ruby Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush"  style="padding: 5px;">
						@foreach($nonVegRubyPkg as $rubyNonVegPkgDish)
						<li class="list-group-item">{{ $rubyNonVegPkgDish->dish_name }}</li>
						@endforeach						
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Gold Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						@foreach($nonVegGoldPkg as $goldNonVegPkgDish)
						<li class="list-group-item">{{ $goldNonVegPkgDish->dish_name }}</li>
						@endforeach	
					</ul> 
				</div>
			</div> 	
			<form style="padding: 10px;">
				<fieldset style="border: 1px solid lightgrey;padding: 50px;">
    				<legend style="width: auto;font-style: italic;text-shadow: 1px 1px;">Book Your Order Now:</legend>
    				<div style="text-align: left;">
					<label>Select Veg Package:</label>
						<select name="vegFoodPackages" class="custom-select">
							<option selected>--Choose Package--</option>
							<option value="Silver">Silver</option>
							<option value="Ruby">Ruby</option>
							<option value="Gold">Gold</option>
						</select>
						<label>Select Non-Veg Package:</label>
						<select name="nonVegFoodPackages" class="custom-select">
							<option selected>--Choose Package--</option>
							<option value="Silver">Silver</option>
							<option value="Ruby">Ruby</option>
							<option value="Gold">Gold</option>
						</select>
					</div>
					<button type="submit" class="btn btn-outline-dark" style="margin-top: 20px;">Place Order</button>
				</fieldset>	
			</form>
		  </div>
		  <div class="tab-pane container fade menu" id="planmenu">
		  	<h4 class="h4Style">Plan Your Menu</h4>
		  		<form>
				<div id="accordion">

				  <div class="card">
				  	<a class="card-link" data-toggle="collapse" href="#collapseOne">
				    <div class="card-header">
				        Main Course
				    </div>
				    </a>
				    <div id="collapseOne" class="collapse show" data-parent="#accordion">
				    	<div class="listStyle">
				    	@foreach($mainCourse as $mainCourseDish)
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="{{ $mainCourseDish->dish_name }}" name="{{ $mainCourseDish->dish_name }}">
					    	<label class="custom-control-label" for="{{ $mainCourseDish->dish_name }}">{{ $mainCourseDish->dish_name }}</label>
						</div>
						@endforeach
				    </div>
					</div>
				  </div>

				  <div class="card">
				  	<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
				    <div class="card-header">  
				        Desserts
				    </div>
				    </a>
				    <div id="collapseTwo" class="collapse" data-parent="#accordion">
				      <div class="listStyle">
				      @foreach($desserts as $dessertDish)
				      <div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="{{ $dessertDish->dish_name }}" name="{{ $dessertDish->dish_name }}">
					    	<label class="custom-control-label" for="{{ $dessertDish->dish_name }}">{{ $dessertDish->dish_name }}</label>
					  </div>
					  @endforeach
				    </div>
					</div>
				  </div>

				  <div class="card">
				  	<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
				    <div class="card-header">
				        Beverages
				    </div>
				    </a>
				    <div id="collapseThree" class="collapse" data-parent="#accordion">
				    	<div class="listStyle">
				    	@foreach($beverages as $beverageDish)
				    	<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="{{ $beverageDish->dish_name }}" name="{{ $beverageDish->dish_name }}">
					    	<label class="custom-control-label" for="{{ $beverageDish->dish_name }}">{{ $beverageDish->dish_name }}</label>
						</div>
						@endforeach
				    	</div>
					</div>
				  </div>
				</div>
				<button type="submit" class="btn btn-outline-dark" style="margin: 20px;">Place Order</button>
				</form>
		  </div>
		</div>
	</div>
</div>
@endsection