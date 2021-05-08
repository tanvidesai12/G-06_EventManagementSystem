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
						<li class="list-group-item">Veg Pulav</li>
						<li class="list-group-item">Alsana with Biya Bhaji</li>
						<li class="list-group-item">Paneer Makhanwala</li>
						<li class="list-group-item">Gobi 65</li>
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Dal Fry</li>
						<li class="list-group-item">Papad</li>
						<li class="list-group-item">Pickle</li>
						<li class="list-group-item">Bread</li>
						<li class="list-group-item">Koshimbir</li>
						<li class="list-group-item">Ice Cream</li>
						<li class="list-group-item">Gulab Jamun</li>
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Ruby Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush"  style="padding: 5px;">
						<li class="list-group-item">Shahi Kesar Pulav</li>
						<li class="list-group-item">Mushroom Xacutti</li>
						<li class="list-group-item">Paneer Rajwadi</li>
						<li class="list-group-item">Veg Diwani Handi</li>
						<li class="list-group-item">Tender Coconut Chilly</li>
						<li class="list-group-item">Crispy Bhendi</li>
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Dal Fry</li>
						<li class="list-group-item">Papad</li>
						<li class="list-group-item">Pickle</li>
						<li class="list-group-item">Gajjar Halwa</li>
						<li class="list-group-item">Ice Cream</li>
						<li class="list-group-item">Fresh Lime & Kokum Juice</li>
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Gold Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						<li class="list-group-item">Tawa Biryani</li>
						<li class="list-group-item">Alsana with Biya Bhaji</li>
						<li class="list-group-item">Mushroom Chettinad</li>
						<li class="list-group-item">Veg Diwani Handi</li>
						<li class="list-group-item">Baby Corn Honey Chilly</li>
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Dal Fry</li>
						<li class="list-group-item">Papad</li>
						<li class="list-group-item">Pickle</li>
						<li class="list-group-item">Crispy Bhendi</li>
						<li class="list-group-item">Ice Cream</li>
						<li class="list-group-item">Fresh Lime & Kokum Juice</li>						
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Kulfi</li>
						<li class="list-group-item">Angoori with Rose Almond Rabdhi</li>
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
						<li class="list-group-item">Veg Fried Rice</li>
						<li class="list-group-item">Chicken Tikka Masala</li>
						<li class="list-group-item">Chicken Cafreal</li>
						<li class="list-group-item">Chicken Noodles</li>
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Prawns Curry</li>
						<li class="list-group-item">Prawns Kismoor</li>
						<li class="list-group-item">King Fish Fry</li>
						<li class="list-group-item">Paneer Achari</li>
						<li class="list-group-item">Dal Fry</li>
						<li class="list-group-item">Pickle</li>
						<li class="list-group-item">Fresh Fruits</li>
						<li class="list-group-item">Caramel Custard</li>
						<li class="list-group-item">Ice Cream</li>
						<li class="list-group-item">Gulab Jamun</li>
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Ruby Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush"  style="padding: 5px;">
						<li class="list-group-item">Mix Fried Rice (Prawns & Chicken)</li>
						<li class="list-group-item">Chicken Cashewnut</li>
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Prawns Curry</li>
						<li class="list-group-item">Mackreal Kismoor</li>
						<li class="list-group-item">King Fish Fry</li>
						<li class="list-group-item">Salad Counter (5 Types)</li>
						<li class="list-group-item">Veg Fried Rice</li>
						<li class="list-group-item">Paneer Banarasi</li>
						<li class="list-group-item">Dal Fry</li>
						<li class="list-group-item">Roti Counter (2 Types)</li>
						<li class="list-group-item">Akhrot Halwa</li>						
						<li class="list-group-item">Tender Coconut Pudding</li>
						<li class="list-group-item">Fresh Fruit</li>
						<li class="list-group-item">Ice Cream (2 Types)</li>						
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Gold Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						<li class="list-group-item">Chicken Biryani</li>
						<li class="list-group-item">Chicken Cashewnut</li>
						<li class="list-group-item">Sea Food Sizzlers</li>
						<li class="list-group-item">Plain Rice</li>
						<li class="list-group-item">Prawns Curry</li>
						<li class="list-group-item">Mackreal Kismoor</li>
						<li class="list-group-item">King Fish Fry</li>
						<li class="list-group-item">Salad Counter (5 Types)</li>
						<li class="list-group-item">Veg Biryani</li>
						<li class="list-group-item">Paneer Banarasi</li>
						<li class="list-group-item">Veg Dry</li>
						<li class="list-group-item">Dal Fry</li>
						<li class="list-group-item">Roti Counter (2 Types)</li>
						<li class="list-group-item">Solkadi</li>
						<li class="list-group-item">Akhrot Halwa</li>
						<li class="list-group-item">Roll Cut Ice Cream (2 Types)</li>
						<li class="list-group-item">Pancake with Different Toppings</li>
						<li class="list-group-item">Fresh Fruit</li>
					</ul> 
				</div>
			</div> 	
			<form style="padding: 10px;">
				<fieldset style="border: 1px solid lightgrey;padding: 50px;">
    				<legend style="width: auto;font-style: italic;text-shadow: 1px 1px;">Book Your Order Now:</legend>
    				<div style="text-align: left;">
					<label for="email">Select Veg Package:</label>
						<select name="foodPackages" class="custom-select">
							<option selected>--Choose Package--</option>
							<option value="volvo">Silver Package</option>
							<option value="volvo">Ruby Package</option>
							<option value="fiat">Gold Package</option>
						</select>
						<label for="email">Select Non-Veg Package:</label>
						<select name="foodPackages" class="custom-select">
							<option selected>--Choose Package--</option>
							<option value="volvo">Silver Package</option>
							<option value="volvo">Ruby Package</option>
							<option value="fiat">Gold Package</option>
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
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item1" name="example1">
					    	<label class="custom-control-label" for="item1">Veg Fried Rice</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item2" name="example1">
					    	<label class="custom-control-label" for="item2">Mushroom Xacutti</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item3" name="example1">
					    	<label class="custom-control-label" for="item3">Paneer Makhanwala</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item4" name="example1">
					    	<label class="custom-control-label" for="item4">Plain Rice</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item5" name="example1">
					    	<label class="custom-control-label" for="item5">Dal Fry</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item6" name="example1">
					    	<label class="custom-control-label" for="item6">Papad</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item7" name="example1">
					    	<label class="custom-control-label" for="item7">Pickle</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item8" name="example1">
					    	<label class="custom-control-label" for="item8">Mix Fried Rice</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item9" name="example1">
					    	<label class="custom-control-label" for="item9">Chicken Cashewnut</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item10" name="example1">
					    	<label class="custom-control-label" for="item10">Prawns Curry</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item11" name="example1">
					    	<label class="custom-control-label" for="item11">Chicken Crispy</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item12" name="example1">
					    	<label class="custom-control-label" for="item12">King Fish Fry</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item13" name="example1">
					    	<label class="custom-control-label" for="item13">Mackreal Kismoor</label>
						</div>
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
				      <div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item14" name="example1">
					    	<label class="custom-control-label" for="item14">Akhrot Halwa</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item15" name="example1">
					    	<label class="custom-control-label" for="item15">Tender Coconut Pudding</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item16" name="example1">
					    	<label class="custom-control-label" for="item16">Pancake with Different Toppings</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item17" name="example1">
					    	<label class="custom-control-label" for="item17">Gulab Jamun</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item18" name="example1">
					    	<label class="custom-control-label" for="item18">Ice Cream (2 Types)</label>
						</div>
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
				    	<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item19" name="example1">
					    	<label class="custom-control-label" for="item19">Soft Drink</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item20" name="example1">
					    	<label class="custom-control-label" for="item20">Fresh Lime Juice</label>
						</div>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="item21" name="example1">
					    	<label class="custom-control-label" for="item21">Kokum Juice</label>
						</div>
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