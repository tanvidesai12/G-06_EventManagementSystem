<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=[
		[
			'cat_name'=>'Live Band',
			'name'=>'Wild Beats',
			'discription'=>'we are a band of five musicians with lead and bass guitarist,drummer,keyboardit,and a singer . we also play violin , trumpett and sexaphone.',
			'music_image'=>'wildbeat.jpg'
		],
		[
			'cat_name'=>'Live Band',
			'name'=>'The Runks',
			'discription'=>'we are a band of five musicians with lead and bass guitarist,drummer,keyboardit,and a singer .',
			'music_image'=>'runks.jpg'
		],
		[
			'cat_name'=>'DJ',
			'name'=>'DJ Ervin',
			'discription'=>'play all songs,mashups,remix with base',
			'music_image'=>'dj.jpg'
		],
		[
			'cat_name'=>'DJ',
			'name'=>'DJ Noel',
			'discription'=>'play all songs,mashups,remix with full blast base',
			'music_image'=>'dj2.jpg'
		],
		[
			'cat_name'=>'Two Man Band',
			'name'=>'The ritz',
			'discription'=>'Two man and one man band,intruments played are keyboard,guitar, drum',
			'music_image'=>'two_man_band1.jpg'
		],
		[
			'cat_name'=>'Two Man Band',
			'name'=>'The Duo',
			'discription'=>'Two man band, we play all english and hindi songs and instuments of your choice. ',
			'music_image'=>'two_man_band2.png'
		]
		];
		DB::table('musics')->insert($data);
    }
}
