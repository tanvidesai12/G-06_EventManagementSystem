<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['dish_name'=>'Veg Pulav','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Dal Fry','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Alsana with Biya Bhaji','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Paneer Makhanwala','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Gobi 65','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Plain Rice','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Papad','category'=>'Main Course','price'=>5.0],
            ['dish_name'=>'Pickle','category'=>'Main Course','price'=>5.0],
            ['dish_name'=>'Bread','category'=>'Main Course','price'=>5.0],
            ['dish_name'=>'Koshimbir','category'=>'Main Course','price'=>10.0],
            ['dish_name'=>'Ice Cream','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Gulab Jamun','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Shahi Kesar Pulav','category'=>'Main Course','price'=>40.0],
            ['dish_name'=>'Mushroom Xacutti','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Paneer Rajwadi','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Veg Diwani Handi','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Tender Coconut Chilly','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Crispy Bhendi','category'=>'Main Course','price'=>10.0],
            ['dish_name'=>'Gajjar Halwa','category'=>'Desserts','price'=>25.0],
            ['dish_name'=>'Tawa Biryani','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Mushroom Chettinad','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Baby Corn Honey Chilly','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Kulfi','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Angoori with Rose Almond Rabdhi','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Veg Fried Rice','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Chicken Tikka Masala','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Chicken Cafreal','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Chicken Noodles','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Prawns Curry','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Prawns Kismoor','category'=>'Main Course','price'=>20.0], 
            ['dish_name'=>'King Fish Fry','category'=>'Main Course','price'=>60.0],
            ['dish_name'=>'Paneer Achari','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Fresh Fruits','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Mix Fried Rice (Prawns & Chicken)','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Chicken Cashewnut','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Mackreal Kismoor','category'=>'Main Course','price'=>25.0],
            ['dish_name'=>'Salad','category'=>'Main Course','price'=>10.0],  
            ['dish_name'=>'Caramel Custard','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Paneer Banarasi','category'=>'Main Course','price'=>40.0],
            ['dish_name'=>'Roti','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Akhrot Halwa','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Tender Coconut Pudding','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Chicken Biryani','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Sea Food Sizzlers','category'=>'Main Course','price'=>30.0],      
            ['dish_name'=>'Roll Cut Ice Cream','category'=>'Desserts','price'=>25.0],
            ['dish_name'=>'Veg Biryani','category'=>'Main Course','price'=>30.0],
            ['dish_name'=>'Veg Dry','category'=>'Main Course','price'=>20.0],
            ['dish_name'=>'Solkadi','category'=>'Beverages','price'=>15.0],
            ['dish_name'=>'Pancake with Different Toppings','category'=>'Desserts','price'=>20.0],
            ['dish_name'=>'Fresh Lime Juice','category'=>'Beverages','price'=>10.0],
            ['dish_name'=>'Kokum juice','category'=>'Beverages','price'=>10.0], 
            ['dish_name'=>'Soft Drink','category'=>'Beverages','price'=>15.0]      
        ];
        DB::table('dishes')->insert($data);
    }
}
