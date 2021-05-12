<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['package_name'=>'Veg Package'],
            ['package_name'=>'Non-Veg Package']
        ];
        DB::table('packages')->insert($data);
    }
}
