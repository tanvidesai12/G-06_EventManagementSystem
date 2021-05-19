<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageDish;
use App\Models\Dish;

class DishController extends Controller
{
    function showDish(Request $req){
        $bkgId=$req->bkgId;
    	$vegGoldPkg=PackageDish::where([['package_name', 'Veg Package'],['sub_package_name','Gold']])->get();
        $vegRubyPkg =PackageDish::where([['package_name', 'Veg Package'],['sub_package_name','Ruby']])->get();
        $vegSilverPkg =PackageDish::where([['package_name', 'Veg Package'],['sub_package_name','Silver']])->get();
        $nonVegGoldPkg = PackageDish::where([['package_name', 'Non-Veg Package'],['sub_package_name','Gold']])->get();
        $nonVegRubyPkg = PackageDish::where([['package_name', 'Non-Veg Package'],['sub_package_name','Ruby']])->get();
        $nonVegSilverPkg = PackageDish::where([['package_name', 'Non-Veg Package'],['sub_package_name','Silver']])->get();

        $mainCourse = Dish::where('category','Main Course')->get();
        $beverages = Dish::where('category','Beverages')->get();
        $desserts = Dish::where('category','Desserts')->get();

    	return view('catering',['vegGoldPkg'=>$vegGoldPkg,'vegRubyPkg'=>$vegRubyPkg,'vegSilverPkg'=>$vegSilverPkg,'nonVegGoldPkg'=>$nonVegGoldPkg,'nonVegRubyPkg'=>$nonVegRubyPkg,'nonVegSilverPkg'=>$nonVegSilverPkg,'beverages'=>$beverages,'mainCourse'=>$mainCourse,'desserts'=>$desserts,'bkgId'=>$bkgId]);
    }
}
