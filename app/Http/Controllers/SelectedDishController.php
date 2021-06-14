<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectedDish;
use App\Models\PackageDish;
use App\Models\Dish;
use App\Models\Booking;
use Illuminate\Support\Arr;
class SelectedDishController extends Controller
{
    function addDish(Request $req){
    	$bkgId=$req->bkgId;
    	$dish_list=$req->get('dish_list');
    	
    	if (!$dish_list) {
			return back()->withErrors('Select atleast one dish!');
    	}
    	else{

    		$booking=Booking::find($bkgId);
    		$booking->dishes()->attach($dish_list);
		}  
		return redirect('bill_details?bkgId='.$bkgId)->with('status', 'Dishes saved successfully!');
    }
    function addPackage(Request $req){
    	$bkgId=$req->bkgId;
    	$veg_pkg=$req->vegFoodPackages;
    	$non_veg_pkg=$req->nonVegFoodPackages;
    	if ($veg_pkg=='none' && $non_veg_pkg=='none') {
    		return back()->withErrors('Select atleast one package!');
    	}
    	else{
    		if($veg_pkg!='none'){
	    		$pkgDishesVeg=PackageDish::where([['package_name','Veg Package'],['sub_package_name',$veg_pkg]])->pluck('dish_name');
	    		$booking=Booking::find($bkgId);
	    		foreach ($pkgDishesVeg as $vegPkgDish) {
	    			$dish=SelectedDish::where([['dish_name',$vegPkgDish],['booking_id',$bkgId]])->first();
	    			if(!$dish){
		    			$vegDishes[]=$vegPkgDish;
	    			}	    			
	    		}
	    		$booking->dishes()->attach($vegDishes);
	    	}
	    	if($non_veg_pkg!='none'){
	    		$pkgDishesNonVeg=PackageDish::where([['package_name','Non-Veg Package'],['sub_package_name',$non_veg_pkg]])->pluck('dish_name');
	    		$booking=Booking::find($bkgId);
	    		foreach ($pkgDishesNonVeg as $nonVegPkgDish) {
	    			$dish=SelectedDish::where([['dish_name',$nonVegPkgDish],['booking_id',$bkgId]])->first();
	    			if(!$dish){
		    			$nonVegDishes[]=$nonVegPkgDish;
	    			}	    			
	    		}
	    		$booking->dishes()->attach($nonVegDishes);
	    	}
    	}
    	return redirect('bill_details?bkgId='.$bkgId)->with('status', 'Dishes saved successfully!');
    }
}
