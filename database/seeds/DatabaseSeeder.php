<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $dImg 	= 'http://larics.fer.hr/wp-content/uploads/2016/04/default-placeholder.png';
        $dImgs	= json_encode([$dImg,$dImg,$dImg,$dImg]);
        $dt 	= Carbon::now()->toDateString();
        $lat 	= '-27.4929184';
        $lng 	= '153.0746137';
        $adr 	= '34 seventh ave, St Lucia, Qld, Australia';
        $desc 	= 'Default Description';
        $capt 	= 'Default Captions';
        DB::table('users')->insert(array(
            ['name' => 'Hoang Ho', 	'email' => 'hoang@digi.dev',	'role' => 'master_admin', 	'password' => \Hash::make('secret'), 'created_at' => $dt, 'updated_at' => $dt], 
            ['name' => 'John Doe', 	'email' => 'john@digi.dev',		'role' => 'admin', 			'password' => \Hash::make('secret'), 'created_at' => $dt, 'updated_at' => $dt],
            ['name' => 'Sarah Doe', 'email' => 'sarah@digi.dev', 	'role' => 'user', 			'password' => \Hash::make('secret'), 'created_at' => $dt, 'updated_at' => $dt]
            )
        );

        DB::table('listings')->insert(array(
            ['title' => 'house 1',	'caption' => $capt,'desc' => $desc,	'prop_type'	=> 'house', 'price' => 100000.00, 'car_no' => 1,'bath_no' => 1,'room_no' => 1, 'img_url' => $dImg, 'img_urls' => $dImgs, 'address' => $adr, 'lat' => $lat, 'lng' => $lng, 'created_at' => $dt, 'updated_at' => $dt],
            ['title' => 'house 1',	'caption' => $capt,'desc' => $desc,	'prop_type'	=> 'house', 'price' => 100000.00, 'car_no' => 2,'bath_no' => 2,'room_no' => 2, 'img_url' => $dImg, 'img_urls' => $dImgs, 'address' => $adr, 'lat' => $lat, 'lng' => $lng, 'created_at' => $dt, 'updated_at' => $dt],
            ['title' => 'house 1',	'caption' => $capt,'desc' => $desc,	'prop_type'	=> 'house', 'price' => 100000.00, 'car_no' => 3,'bath_no' => 3,'room_no' => 3, 'img_url' => $dImg, 'img_urls' => $dImgs, 'address' => $adr, 'lat' => $lat, 'lng' => $lng, 'created_at' => $dt, 'updated_at' => $dt]

            ) 
        );
    }
}
