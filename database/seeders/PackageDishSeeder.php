<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageDishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['dish_name'=>'Veg Pulav','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Alsana with Biya Bhaji','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Paneer Makhanwala','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Gobi 65','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Plain Rice','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Dal Fry','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Papad','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Pickle','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Bread','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Koshimbir','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Ice Cream','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Gulab Jamun','package_name'=>'Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Shahi Kesar Pulav','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Mushroom Xacutti','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Paneer Rajwadi','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Veg Diwani Handi','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Tender Coconut Chilly','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Crispy Bhendi','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Plain Rice','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Dal Fry','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Papad','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Pickle','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Gajjar Halwa','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Ice Cream','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Fresh Lime Juice','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Kokum Juice','package_name'=>'Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Tawa Biryani','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Alsana with Biya Bhaji','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Mushroom Chettinad','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Veg Diwani Handi','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Baby Corn Honey Chilly','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Plain Rice','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Dal Fry','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Papad','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Pickle','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Crispy Bhendi','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Ice Cream','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Fresh Lime Juice','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Kokum Juice','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Kulfi','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Angoori with Rose Almond Rabdhi','package_name'=>'Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Veg Fried Rice','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Chicken Tikka Masala','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Chicken Cafreal','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Chicken Noodles','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Plain Rice','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Prawns Curry','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Prawns Kismoor','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'King Fish Fry','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Paneer Achari','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Dal Fry','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Pickle','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Fresh Fruits','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Caramel Custard','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Ice Cream','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Gulab Jamun','package_name'=>'Non-Veg Package','sub_package_name'=>'Silver'],
            ['dish_name'=>'Mix Fried Rice (Prawns & Chicken)','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Chicken Cashewnut','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Plain Rice','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Chicken Noodles','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Prawns Curry','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Mackreal Kismoor','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'King Fish Fry','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Salad','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Veg Fried Rice','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Paneer Banarasi','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Dal Fry','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Roti','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Akhrot Halwa','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Tender Coconut Pudding','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Fresh Fruits','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Ice Cream','package_name'=>'Non-Veg Package','sub_package_name'=>'Ruby'],
            ['dish_name'=>'Chicken Biryani','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Chicken Cashewnut','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Sea Food Sizzlers','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Plain Rice','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Prawns Curry','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Mackreal Kismoor','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'King Fish Fry','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Salad','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Veg Biryani','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Paneer Banarasi','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Veg Dry','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Dal Fry','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Roti','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Solkadi','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Akhrot Halwa','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Roll Cut Ice Cream','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Pancake with Different Toppings','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold'],
            ['dish_name'=>'Fresh Fruits','package_name'=>'Non-Veg Package','sub_package_name'=>'Gold']
        ];
        DB::table('package_dishes')->insert($data);
    }
}
