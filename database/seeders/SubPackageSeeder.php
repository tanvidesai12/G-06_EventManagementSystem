<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['sub_package_name'=>'Silver'],
            ['sub_package_name'=>'Ruby'],
            ['sub_package_name'=>'Gold']
        ];
        DB::table('sub_packages')->insert($data);
    }
}
