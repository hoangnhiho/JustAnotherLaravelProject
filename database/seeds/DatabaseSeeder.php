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
        $desc 	= 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
        
        $capt 	= 'Default Captions';
        DB::table('users')->insert(array(
            ['name' => 'Hoang Ho', 	'email' => 'hoang@digi.dev',	'role' => 'master_admin', 	'password' => \Hash::make('secret'), 'created_at' => $dt, 'updated_at' => $dt], 
            ['name' => 'John Doe', 	'email' => 'john@digi.dev',		'role' => 'admin', 			'password' => \Hash::make('secret'), 'created_at' => $dt, 'updated_at' => $dt],
            ['name' => 'Sarah Doe', 'email' => 'sarah@digi.dev', 	'role' => 'user', 			'password' => \Hash::make('secret'), 'created_at' => $dt, 'updated_at' => $dt]
            )
        );

        for ($i=0;$i<=30;$i++){
            DB::table('listings')->insert(['title' => 'House ' . $i,  'caption' => $capt,'desc' => $desc, 'prop_type' => 'house', 'price' => rand(100000,400000), 'car_no' => rand(1,3),'bath_no' => rand(1,3),'bed_no' => rand(1,5), 'img_url' => self::getImg(), 'img_urls' => self::getImgs(), 'address' => $adr, 'lat' => $lat, 'lng' => $lng, 'created_at' => $dt, 'updated_at' => $dt]);
        }
    }

    public function getImg(){
        return 'https://unsplash.it/400/300?image=' . rand(1,999);
    }
    
    public function getImgs(){
        return json_encode([ self::getImg(),self::getImg(),self::getImg() ]);
    }
}
