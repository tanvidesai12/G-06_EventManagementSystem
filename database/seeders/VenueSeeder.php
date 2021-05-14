<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$data=[
		[
			'venue_name'=>'The Venue - Banquet Hall',
			'address'=>'Off Bishop Rebello Road, near SGPDA Market Complex, opposite ravindra bhavan, Fatorda, Margao, Goa 403601',
			'price'=>45000,
			'capacity'=>700,
			'venue_image'=>'the_venue_margao.jpg'
		],
		[
			'venue_name'=>'The Village - Banquet Hall',
			'address'=>'Pateapur, Edapally - Panvel Hwy, Nuvem, Goa 403604',
			'price'=>55000,
			'capacity'=>1000,
			'venue_image'=>'village_nuvem.jpg'
		],
		[
			'venue_name'=>'Kesarval Garden Retreat',
			'address'=>'Verna Plateau, Verna, 403710, opposite Toyota Showroom,Goa 403710',
			'price'=>35000,
			'capacity'=>255,
			'venue_image'=>'kesarval.jpg'
		],
		[
			'venue_name'=>'Salle 59 Banquet Hall',
			'address'=>'Navelcar Pride, NH - 4A Chimbel on Panaji-Old Goa, bypass road, Panaji, Goa 403006',
			'price'=>60000,
			'capacity'=>400,
			'venue_image'=>'salle.png'
		],
		[
			'venue_name'=>'Daivadnya Bhavan',
			'address'=>'Margao - Quepem Road, Sanscar Society, Calconda, Margao, Goa 403601',
			'price'=>45000,
			'capacity'=>700,
			'venue_image'=>'Daivadnya.png'
		],
		[
			'venue_name'=>'Green Amaze',
			'address'=>'Gogol, Margao, Goa 403601',
			'price'=>45000,
			'capacity'=>1325,
			'venue_image'=>'green_amaze.jpg'
		]
		];
		DB::table('venues')->insert($data);
    }
}
