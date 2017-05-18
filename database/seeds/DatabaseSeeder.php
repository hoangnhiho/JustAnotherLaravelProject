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
        $dPdfUrl   = 'http://ec2-54-86-237-65.compute-1.amazonaws.com/pdfs/mags/';
        $dImgUrl   = 'http://ec2-54-86-237-65.compute-1.amazonaws.com/images/';
        $dImg   = 'http://larics.fer.hr/wp-content/uploads/2016/04/default-placeholder.png';
        $dImgPath   = 'http://ec2-54-86-237-65.compute-1.amazonaws.com/images/project/pastprojects/';
        $dImgPath1 	= 'http://ec2-54-86-237-65.compute-1.amazonaws.com/images/project/currentProjects/';
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

        // for ($i=0;$i<=30;$i++){
        //     DB::table('listings')->insert(['title' => 'House ' . $i,  'caption' => $capt,'desc' => $desc, 'prop_type' => 'house', 'price' => rand(100000,400000), 'car_no' => rand(1,3),'bath_no' => rand(1,3),'bed_no' => rand(1,5), 'img_url' => self::getImg(), 'img_urls' => self::getImgs(), 'address' => $adr, 'lat' => $lat, 'lng' => $lng, 'landsize' => rand(80,200), 'council_rate' => rand(1000, 1500), 'water_rate' => rand(1000, 1500), 'created_at' => $dt, 'updated_at' => $dt]);
        // }

        // Rent
        DB::table('listings')->insert(['title' => '68 Regents Drive, Redbank Plains QLD 4301',  'caption' => $capt,
            'desc' => '<p>BRAND NEW - FIRST WEEK FREE!!!</p><p>FERNBROOKE RIDGE ESTATE</p><p>GJ Gardener Homes. Quality finishes and Fixtures!</p> <ul><li>4 bedrooms</li><li>Main bedroom with walk in robe</li><li>All bedrooms with ceiling fans/lights</li><li>2 Bathrooms inc ens</li><li>Large Gas cooker in kitchen</li><li>Stone top benches</li><li>Air con in living</li><li>Kitchen/living large open plan</li></ul><p>Please email through your availability to view</p>', 
            'prop_type' => 'house', 'type' => 'rent', 'price' => 380, 'bond' => 1520, 'car_no' => 1,'bath_no' => 2,'bed_no' => 4, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/f9f8fb42c1585ba610d326ee02be4bbee55adb4dfd5c090f5232e89e5fea7419/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/ba9b4dc01672ae1f0c84496e9adf16a8cae012531ff6888c978b6fb2f4369640/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/2e73e52e88f672a37183b47e277e3921e8049f051a36cdb7053b83bd196c053f/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/d6ab4cca8ba67b6769947ab7156fc8c85c0916b53aaa185e52df3d7f91300a8e/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/ab38cb82e3bc8ecc8fd45a78db1eb09bc98ac0e903faf9354da6711889ddc9a3/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/d2af14aecbfd3e520b4f5509c322ca595e3ca4a0399746580770ea005a2de7ac/image6.jpg',
                'https://i4.au.reastatic.net/1530x841/e8f7b2a74b73ed86a98dbd76f7e1fb5c2de1f6812022910357351b41567a2fb5/image8.jpg',
                'https://i1.au.reastatic.net/1530x841/c35294b6042eb15454dd308e5efaaaf49856898093b95f51d056c79573c96db8/image9.jpg',
                'https://i3.au.reastatic.net/1530x841/022e2303060609bfc7b709922d83ae7342baabcbfe6a01bac4bbc2418817944c/image11.jpg',
                'https://i4.au.reastatic.net/1530x841/578646f9a2fe70168fd5063d7f1651b73b655bfdc9acc0ed9649f1b1021843fc/image12.jpg',
                'https://i1.au.reastatic.net/1530x841/1030c9c70ea19e3d977483268e8ecd167d8cc41edfc4ddc0e70055d611c590a6/image13.jpg'
            ]), 
            'mini_desc'=>'<p>BRAND NEW - FIRST WEEK FREE!!!</p><p>FERNBROOKE RIDGE ESTATE</p><p>GJ Gardener Homes. Quality finishes and Fixtures!</p>',
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1682/66b1222dfdb065774721285558930b4d1531aeba2f342a1fec35c6a41a4e7429/floorplan1.jpg', 
            'address' => '68 Regents Drive, Redbank Plains QLD 4301', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '70 Regents Drive, Redbank Plains QLD 4301',  'caption' => $capt,
            'desc' => '<p>BRAND NEW - FIRST WEEK FREE!!!</p><p>FERNBROOKE RIDGE ESTATE</p><p>GJ Gardener Homes. Quality finishes and Fixtures!</p> <ul><li>4 bedrooms</li><li>Main bedroom with walk in robe</li><li>All bedrooms with ceiling fans/lights</li><li>Double car Garage</li><li>2 Bathrooms inc ens</li><li>Large Gas cooker in kitchen</li><li>Walk in Pantry</li><li>Stone top benches</li><li>Air con in living</li><li>Kitchen/living large open plan</li><li>Separate Lounge / Media Room </li><li>Study Nook</li></ul><p>Please email through your availability to view</p>', 
            'prop_type' => 'house', 'type' => 'rent', 'price' => 400, 'bond' => 1600, 'car_no' => 2,'bath_no' => 2,'bed_no' => 4, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/034917541c2cab7bd3ca9930356b954d4ef0c2c48d110abf9089d6134e2d8415/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/febbd0cae0ee50da0c94b7352fac0922caf4be1041493d4ed4cafb7d797a8d34/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/295680f4f49fa2f90d8a184a7c9cb972a6e02fd009ee173765c2d9c66b77ac3b/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/dc5ae2ee2d88ef80199167be8bd4df2aa9619526bef8ccf63d94acc63874b12a/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/e7e7f57251d9bc66b9bf66522f45edbd2faedd52e9e8b7902e7b50bb21d5dfd6/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/2378fe49e063aa98d787fc9e3f27dfcd95cab9756de67f6d86c96f500a500389/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/510bf678a4a1da26d76df11116c380eef58f8ceb7a26e2092d37f8e7a5d4abdf/image7.jpg',
                'https://i1.au.reastatic.net/1530x841/f42d4a3999e60d28a7259e2e3cf29e8d3c6f3dd2c2de0757433dca529198690e/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/b6fed7c17d22ae8d83192a5a27fddbd201a2d16b3e2b715b5534c877fa97e64d/image10.jpg',
                'https://i3.au.reastatic.net/1530x841/45113683af08f790a979f016e8394eeab86be6c73cc8bab5d523839ddefb416b/image11.jpg',
                'https://i1.au.reastatic.net/1530x841/196eb575e0e32f76a19e1f9611a312a56fd7eb66e5076da9448fd95297828fff/image13.jpg'
            ]), 
            'mini_desc'=>'<p>BRAND NEW - FIRST WEEK FREE!!!</p><p>FERNBROOKE RIDGE ESTATE</p><p>GJ Gardener Homes. Quality finishes and Fixtures!</p>',
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1682/b5d31ba6ecf0bf38962c5bee4c4722ddd7b5755ba0ad00b280631b7ab8008b75/floorplan1.jpg', 
            'address' => '70 Regents Drive, Redbank Plains QLD 4301', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '210/501 Adelaide Street, Brisbane CBD QLD 4000',  'caption' => $capt,
            'desc' => '<p>FULLY FURNISHED - LARGE ALLOWANCE OF SERVICES PROVIDED</p><p>CITY LIVING MADE EASY!!</p><p>With close proximity to the city’s best attractions and corporate precinct both the business and leisure traveller will find this location ideal. Public transport is moments away and will have you travelling around the city with ease</p><p>If keeping up your fitness whilst away is a must enjoy the state of the art gym with 24-hour access and heated lap pool, then relax and unwind in the spa and sauna. Take a stroll and enjoy some retail therapy at Queen Street Mall home to leading fashion stores. Discover delicious dining at the ever popular Southbank and perhaps catch a live show at QPAC (Queensland Performing Arts Centre).</p><p>Please email through your availability to view</p>', 
            'prop_type' => 'house', 'type' => 'rent', 'price' => 430, 'bond' => 1720, 'car_no' => 0,'bath_no' => 1,'bed_no' => 1, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/48fc8669012711fd048bb2a9cdbfc3611fced72ce5c2c6e68fcd1f4b7ccdb3ea/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/4ee8258e1ebb807137be7ce232b881bba2f11313daebffc57cd4ddd6b73fcf27/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/603d7bca0913aa05c8fc3f30fd548f3e282a5695e9bea56c8e4a0e3e75001286/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/760dfb3c081ad3202c87ba6f0106755006fd38cda7b5ac286ae3fbfa82de552c/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/ee3d7df1ca4b7966bc5c12ae97dc9b23ad119270aa1912718d585e4a991cb8f8/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/2378fe49e063aa98d787fc9e3f27dfcd95cab9756de67f6d86c96f500a500389/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/510bf678a4a1da26d76df11116c380eef58f8ceb7a26e2092d37f8e7a5d4abdf/image7.jpg'
            ]), 
            'mini_desc'=>'<p>FULLY FURNISHED - LARGE ALLOWANCE OF SERVICES PROVIDED</p><p>CITY LIVING MADE EASY!!</p><p>With close proximity to the city’s best attractions and corporate precinct both the business and leisure traveller will find this location ideal. Public transport is moments away and will have you travelling around the city with ease</p>',
            'floor_plan' => 'https://i4.au.reastatic.net/3060x1682/dbb796742d9b11656409c752ce9dc9a8def1d9a8ac8dcd1340f03be5285ece90/floorplan1.jpg', 
            'address' => '210/501 Adelaide Street, Brisbane CBD QLD 4000', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '1507/70 Mary Street, Brisbane CBD QLD 4000',  'caption' => $capt,
            'desc' => '<p>Everything Lifestyle can offer AT YOUR FEET!</p><p>There are two retail floors located within M on Mary, featuring the Hanwoori Korean Restaurant, Madison Bar Club & Karaoke, Cafe M70 and the Davinci Health Club. Further bar on premises, gymnasium, sauna, lift/elevator, sauna, spa, steam room land electronic swipe-card security (doors & lifts)</p><p>Things To Do - </p><p>Brisbane\'s many attractions are within easy reach of the M On Mary serviced apartment hotel. Some of these include: Brisbane city Botanic Gardens - Alice Street River cruises - Along Eagle Street Queen Street Mall - Shopping and cinemas Treasury Casino Roma Street Parklands - Roma Street Queensland Performing Arts Centre and Queensland Art Gallery for a enjoyable cultural experience. The visitor’s information centre is located in Queen Street, offering information and booking services for a large number of tours etc Australia Zoo - Sunshine Coast - approx. 1 hour by car.</p><p>The apartment features:</p><ul><li>Main Bedroom with built-ins</li><li>Large study room</li><li>Large bathroom with laundry</li><li>Modern kitchen with stone benches and gas cooktop</li><li>Fully furnished</li><li>Ducted air conditioning</li><li>inclusion of utilites to be negotiated</li></ul><p>M On Mary boasts the following facilities:</p><ul><li>25m lap pool</li><li>Sauna</li><li>Gymnasium</li><li>Outdoor entertaining terrace with BBQs</li></ul>', 
            'prop_type' => 'house', 'type' => 'rent', 'price' => 430, 'bond' => 1720, 'car_no' => 0,'bath_no' => 1,'bed_no' => 1, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/c197a2adbdb43995414a5eaae528cfed8967ddfc2708a95c79a53ca8638e29f4/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/5c4a4ba0101eed9ade63edead3becdd104194250290d44ca6c75abdabb98b98d/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/3e6822f5ae0551ca2fa915ff327c8916f73bde6db2ea5eb4c220e614c8481dce/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/2abe2608ff5cd0537601e2c56f0dd16adcf27d2af4a6099f96d93decf67fc9e2/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/f04b9ae94984b57572b7fdc69ec0d7fee0ea3dc06b999b48297812aaaf4a0033/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/f2e8e63095fe478a6c6abc6c4868cb3397f7175875d7c359f19dd1de47feb9b8/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/f8a6ddc9a40710c501fd48e7061fdbdf1d9ee9a2c99fbf8605966abdec7ce0ee/image7.jpg',
                'https://i1.au.reastatic.net/1530x841/a813b354f9cb70fbeb3c2595f63d574550bdd72d4f62e5fadc49b20522c587ad/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/9ec8bad840cea078a0d28498266be8a0dde1993e8980e00c167610eeb918d30f/image10.jpg',
                'https://i3.au.reastatic.net/1530x841/75d9b9bddc0ed058e4abb2639bf44761344ed4c9534c083572cbe832cb7f2fea/image11.jpg',
                'https://i4.au.reastatic.net/1530x84/8ee309ab92e67b9a1a05f141a2a46874798dbef957fd62c4a20eb2c478eb02b9/image12.jpg'
            ]), 
            'mini_desc'=>'<p>Everything Lifestyle can offer AT YOUR FEET!</p><p>There are two retail floors located within M on Mary, featuring the Hanwoori Korean Restaurant, Madison Bar Club & Karaoke, Cafe M70 and the Davinci Health Club. Further bar on premises, gymnasium, sauna, lift/elevator, sauna, spa, steam room land electronic swipe-card security (doors & lifts)</p>',
            'floor_plan' => 'https://i2.au.reastatic.net/3060x1682/70e63da77d079338b4a5b1901a0701b82c8bb6b6524971331ad1fb6ece8378db/floorplan1.jpg', 
            'address' => '1507/70 Mary Street, Brisbane CBD QLD 4000', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);
        
        DB::table('listings')->insert(['title' => '5303/18 Parkside Cct, Hamilton CBD QLD 4007',  'caption' => $capt,
            'desc' => '<p>GORGEOUS 1 bedroom apartment available NOW!!</p><p>Plenty of storage in the apartment with quality finishing’s, a well thought out floor plan and some river and City views from your bedroom and your balcony!</p><p>There is gas cooking, ducted air, Built-in robes with shelving and draws, tile and carpet thought out. Large common pool, BBQ and Gym facilities.</p>', 
            'prop_type' => 'house', 'type' => 'rent', 'price' => 400, 'bond' => 1600, 'car_no' => 1,'bath_no' => 1,'bed_no' => 1, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841]/2700077c56ba6bfbb92f6589ddc25b5f1cb73eb7a3b9ec5e43047e370aa5078e/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/db4879e355e61351678e4e6304e57bef7f171b1758e3c5418e8b6ee581b5a3b4/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/0960b3f76428659a39181df8d9167545fc5fb5a6432d75f446918725d397daa9/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/c67636b4e85de0df224029801cce366f9e5a2130f4c3eb5e7f52f9a3a1448aa5/image4.jpg',
                'https://i2.au.reastatic.net/1530x841/29305f9e245d726953e76d35f2958db9757dff233f181aa965981dd9b3163e4f/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/acb41fff39e19dd7e49a13874d9c10951b577f9cbc4e2e62e886320ad56896b1/image7.jpg',
                'https://i1.au.reastatic.net/1530x841/13a378adf4d02e914de0a67efe658d60709a7b579a3a7a5c357d2740c45b1a77/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/f9acf143efdcfd8de0543db321a89f77d5c6658e334de514f2ad45f98ae9747f/image10.jpg',
                'https://i3.au.reastatic.net/1530x841/003656b864fad547ed2b218645020b753b004c0b35e3e3444ac70fdb6958af47/image11.jpg',
                'https://i4.au.reastatic.net/1530x841/2fda02f1d9c61128f52fecf526f0c191b739abdc7ee42dd77d72f71d3763c625/image12.jpg',
                'https://i1.au.reastatic.net/1530x841/f70447761d8f8e5076c91e5be5014f4a698751e71c2e59ce3225cab9523f0960/image13.jpg'
            ]), 
            'mini_desc'=>'<p>GORGEOUS 1 bedroom apartment available NOW!!</p><p>Plenty of storage in the apartment with quality finishing’s, a well thought out floor plan and some river and City views from your bedroom and your balcony!</p><p>There is gas cooking, ducted air, Built-in robes with shelving and draws, tile and carpet thought out. Large common pool, BBQ and Gym facilities.</p>',
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1682/99c83d79aabae2fd396f3a994daed77d65c94d1307b64978ecd7f41570120854/floorplan1.jpg', 
            'address' => '5303/18 Parkside Cct, Hamilton CBD QLD 4007', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);      

        DB::table('listings')->insert(['title' => '20904/37D Harbour Road , Hamilton CBD QLD 4007',  'caption' => $capt,
            'desc' => '<p>Waterfront Apartment</p><p>Spectacular opportunity for you to rent right on the water at Hamilton Portside in the newly finished apartment complex Pinnacle.</p><p>Spacious fully furnished 3 bedroom, 2 bathroom, 2 car park apartment featuring 2 balconies overlooking river and city views. Live in a cosmopolitan lifestyle surrounded by a range of lifestyle conveniences.</p><p>Direct access to the Portside Wharf and close to Kingsford Smith Drive and the Gateway Arterial, 6 minute drive to CBD and 9 minutes to the airport. We are also surrounded by a range of public transport options including train, ferry, bus, bike and walkways.</p><p>Located in the heart Hamilton walking distance to Racecourse Road and the Portside Hamilton retail precinct, including a IGA supermarket, Dendy Cinema, Hairdresser, Restaurants, Café\'s and Retail shops.</p>', 
            'prop_type' => 'house', 'type' => 'rent', 'price' => 950, 'bond' => 3800, 'car_no' => 2,'bath_no' => 2,'bed_no' => 3, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/fc295283ccb074ad80d5a268b0264dce8bf73936c0a579fe65f23ac49bcef4a7/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/f54ff9f07bb5cfa636d06048e904ddb56192f5c7f19a33d9272d426a53845ee5/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/8111cde138b7e9904c5cb9f6eba146aeeb76df756e978e8bbf7ee0b8d088939a/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/5e164830c6cab4ca800d209d560f1824d38d594492a739b9fb9395f7d8f1a55d/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/4387330cd2063bc71b2f262bc3538c09ebef74c2a61230596775ba48394b662c/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/1791950801d5d98f726706f7b84e685da5125d83ecb2ecaa897ccc72a107a3f4/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/52c5059c6090c8afb962cce80505c4961536ae330a2a7c519594e8703704c688/image7.jpg',
                'https://i4.au.reastatic.net/1530x841/2fa587b70f2e8ec984ac23d32f3c4d2a83fd80051192b3c4c9f323067e844573/image8.jpg',
                'https://i1.au.reastatic.net/1530x841/5ba93c2e45bd1453592ac9a7673dce9c71b26b3b9dbbe046b7a752514772e31e/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/78e9fcc28bacc499cba4936cd0175e23296e4d80e42b40032cb3106092e450a0/image10.jpg',
                'https://i3.au.reastatic.net/1530x841/40d07f1ed0037bb9cc05072a66478d7b3881eee3c5a3d89bdedb13a1bff0f3ae/image11.jpg'
            ]), 
            'mini_desc'=>'<p>Waterfront Apartment</p><p>Spectacular opportunity for you to rent right on the water at Hamilton Portside in the newly finished apartment complex Pinnacle.</p><p>Spacious fully furnished 3 bedroom, 2 bathroom, 2 car park apartment featuring 2 balconies overlooking river and city views.</p>',
            'floor_plan' => 'https://i2.au.reastatic.net/3060x1682/c01be241e27685d8089b3a784b9b409a5a5d44ef82d1818d94e103cfffff87ff/floorplan1.jpg', 
            'address' => '20904/37D Harbour Road , Hamilton CBD QLD 4007', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);
        

        DB::table('listings')->insert(['title' => '10/102 Parkside Circuit, Hamilton QLD 4007',  'caption' => $capt,
            'desc' => '<p>Three bedrooms over four level, finished using high-end materials and designed with space and privacy in mind.</p><p>Riverside living at its finest, top floor opens to spectacular views out to the Brisbane River, living and dining areas flow from a spacious and well equipped kitchen that has beautiful stone bench tops and Miele appliances including coffee machine, microwave, dishwasher, two ovens, five burner gas cooktop and built in double door fridge and freezer. A butler\'s pantry provides an additional preparation area and contains sink, dishwasher and storage cupboards. This kitchen is a chef’s paradise!</p><p>Second level contains the main bedroom and a private retreat, situated away from the other bedrooms and includes a walk-in wardrobe and en-suite with dual basins, large shower and separate bath. A multi-purpose room is also located on this level, suitable for home theater or second lounge room.</p><p>A study nook, complete with computer power points and cupboards provides the ideal home office facilities.</p><p>On the ground level, you will find two more bedrooms all with built-in wardrobes and a full equipped laundry. All levels have stunning wooden floor boards, with all bedroom carpets. As an extra bonus, internal lift services all levels.</p><p>Below ground level you have the garage, two cars spaces plus ample storage, with remote access for added security.</p><p>All floors are linked by your own personal lift, so you can impress your guests by bringing them straight to the entertainment floor or bring the groceries without struggle from your car in the basement to the kitchen and butlers pantry on the top floor.</p><p>Five minutes’ drive to local shops and restaurant, two minutes’ walk to CityCat ferry terminal. Fifteen minutes’ drive to the airport and CBD. Local dog park, beach and walking track, plus Brisbane’s finest golf course is right at your door step. </p><p>This property must be inspected, and won’t last long.</p>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => null, 'bond' => 3800, 'car_no' => 2,'bath_no' => 2,'bed_no' => 3, 
            'img_url' => 'https://i1.au.reastatic.net/1530x797/57b9b2bd7e9518217c1a69789480bfb0d0fc870bc2a43815e000b81b2a738dde/main.jpg', 
            'img_urls' => json_encode([
                'https://i1.au.reastatic.net/1530x797/a7d9bcd3b3677d0118557b25e6e4115f016aad12988ca1f45dd64e4d4fa33410/image5.jpg',
                'https://i2.au.reastatic.net/1530x797/1e5d69462a3be4b6620b309cabbbab455f5fdd84d314fdc7854d085c3f3fbd0f/image6.jpg',
                'https://i3.au.reastatic.net/1530x797/8d45aedf3cd60504abd4369db7f6339607a72f466fbe76e220bfea0807c8db39/image7.jpg',
                'https://i4.au.reastatic.net/1530x797/9b96376187c332c9e47f3a8d40e448042ab716ffce9c8e93e16a6479c0ce30aa/image8.jpg',
                'https://i1.au.reastatic.net/1530x797/82e7cdb3f66d0ada14fba5c0f5ba1fae1a904a8d47b0822134eaefc3b1c2d1f9/image13.jpg',
                'https://i2.au.reastatic.net/1530x797/deb497f4fed2c254c4a52c028e876567d22f82b4d54c456d8d63a7b64e865c9d/image14.jpg',
                'https://i3.au.reastatic.net/1530x797/ceb2b82322a06a9ef280b881e3a90cbd039dd3d2e89c417444a1e4ae21055c2f/image15.jpg',
                'https://i4.au.reastatic.net/1530x797/a096e09871e958cd2737316d2657150a296863020c000918129ae2ebed810857/image16.jpg'
            ]), 
            'mini_desc'=>'<p>Three bedrooms over four level, finished using high-end materials and designed with space and privacy in mind.</p><p>Riverside living at its finest, top floor opens to spectacular views out to the Brisbane River, living and dining areas flow from a spacious and well equipped kitchen that has beautiful stone bench tops and Miele appliances including coffee machine, microwave, dishwasher, two ovens, five burner gas cooktop and built in double door fridge and freezer. A butler\'s pantry provides an additional preparation area and contains sink, dishwasher and storage cupboards. This kitchen is a chef’s paradise!</p>',
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1594-resize,r=33,g=40,b=46/96af9a3d0a715dcf4ffbee06daf63902c0776d6a6eee956c52d6f18d5b56abf3/floorplan1.jpg', 
            'address' => '10/102 Parkside Circuit, Hamilton QLD 4007', 'lat' => $lat, 'lng' => $lng, 'landsize' => 276, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);
        

        DB::table('listings')->insert(['title' => '26 Hanover Drive, Pimpama QLD 4209',  'caption' => $capt,
            'desc' => '<p>Situated in the \'Waverley Views Estate\' Pimpama, it is a property you don’t want to miss out on. This open plan four bedroom home is perfect as a family home or investment property. This spacious air-conditioned living room opens effortlessly on to outdoor entertaining area, which flows through to the 600m2 fully fenced yard.</p><p>This property would be a fantastic family home or if you are looking for a good investment in a peaceful estate, it is currently renting for $430 per week.</p><p>Residents of \'Gainsborough Greens\' will enjoy close proximity to everything from transport through to retail shopping, childcare, parks, schools and clubs.</p><ul><li>3.5km approx. from Coomera town centre, shops and restaurants</li><li>2-3km approx. from Pimpama Primary and Pimpama state high schools</li><li>3-5km from Ormeau and Coomera train stations</li><li>13 minutes from Helensvale Westfield mall</li><li>7 minutes from Dream world and 11 minutes from Movie world</li><li>30 minutes from Surfers paradise.</li></ul><p>Features include:</p><ul><li>Four bedrooms all with built-in-wardrobes and ceiling fans</li><li>Two bathrooms, en-suite in the main bedroom</li><li>Large tiled family and dining room</li><li>Stainless steel appliances throughout the kitchen </li><li>Security screens to all windows and doors</li><li>Air-conditioning and ceiling fans throughout</li><li>Covered outdoor entertainment area</li><li>Auto double lock up garage</li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 409000, 'bond' => 3800, 'car_no' => 4,'bath_no' => 2,'bed_no' => 4, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/f4efc34c6b112c3d4d3a6c5f8071c0208845b4a4e92f52589b39577b34c6572d/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/bc3be0e0cb918aa199a08a1723b977cc0c3e87ec22813df19355fc95d72352cd/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/825d6874a1d0847eca5ac8d749810580b0997935f5e02b81848049bea211cfdc/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/8ef85fcbd8a78a120727bf206406be88c1e78f3fc73a0463f92ffac700d10d4c/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/ac3de4696eb6b3a4be080d3d5d2726f3a015bd7515139705d35dfc814b0c55d3/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/e4b994d01c0c0e93adf6387306ce25e8dcf729d8b710e2c4ec8885408c0ac95c/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/1d107616ae5683f3d818ea64adfa2273aa073d67b125a862fe8a00b29b236bf2/image7.jpg',
                'https://i4.au.reastatic.net/1530x841/b9ebd855931227160f378a24e9c18e4ea321a5908429360bbac8f3fb0be0a25a/image8.jpg',
                'https://i1.au.reastatic.net/1530x841/f932c325ff66190b77ec9c326231e5f770dc87cec7cba3d497caf656f4b63de2/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/d9c3d81de44ea49d019170433e670b4f7b798449bada4db32d35003cd6279233/image10.jpg',
                'https://i1.au.reastatic.net/1530x841/65ba8fb94f4f68f123d84cafce6f2268589aff634f1106cfad4305d0ee6278fa/image13.jpg'
            ]),
            'mini_desc'=>'<p>Situated in the \'Waverley Views Estate\' Pimpama, it is a property you don’t want to miss out on. This open plan four bedroom home is perfect as a family home or investment property. This spacious air-conditioned living room opens effortlessly on to outdoor entertaining area, which flows through to the 600m2 fully fenced yard.</p>', 
            'floor_plan' => 'https://i2.au.reastatic.net/3060x1682/4d97b2bac923407e403ee2f90ba8055778c59a4a51969b655e35ec1f7866d920/floorplan1.jpg', 
            'address' => '26 Hanover Drive, Pimpama QLD 4209', 'lat' => $lat, 'lng' => $lng, 'landsize' => 600, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '33 Lewis Place, Calamvale QLD 4116',  'caption' => $capt,
            'desc' => '<p>This house is bigger than you think! If you are looking for space, this is it! This lovely 4 - 5-bedroom home sits on flat 532m2 is waiting for a new owner. Spacious and newly painted, this home is ideally located close to local transport, shops, Calamvale College, Child care, local parks and playgrounds, grocery stores and restaurants. Master bedroom with en-suite and ceiling fan, other 3 – 4 bedrooms with built-in-wardrobes and floating wooden floor boards. Living, dining and Kitchen is spacious and sleek. Well equipped kitchen featuring, electric oven and cook top, range hood, dishwasher and low maintenance tile splashback. This property needs to been seen, as it has endless potential for a family or investor looking to get into the very highly demanded Calamvale suburb.</p><ul><li>4 bedrooms all with built-in-wardrobes and ceiling fans</li><li>2-3km approx. from Pimpama Primary and Pimpama state high schools</li><li>3-5km from Ormeau and Coomera train stations</li><li>13 minutes from Helensvale Westfield mall</li><li>7 minutes from Dream world and 11 minutes from Movie world</li><li>2 bathrooms with en-suite and separate toilet</li><li>Open plan living and dining area</li><li>Universal room that you can use as a 5th bedroom, office or rumpus room</li><li>Possibility to revert to a remote double lock-up garage.</li><li>At the end of a cul-de-sac </li><li>Quiet neighbourhood</li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 539000, 'bond' => null, 'car_no' => 2,'bath_no' => 2,'bed_no' => 5, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/b39f9722441a0ac5821a62499da74a7e5c1f27442eb1f021204a0e72d62a1cc9/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/53f07c7ac251af70bfc5e458e5ec11c5d695c628646cbc8c0062dc4991a1322c/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/6442358648171ade126289e33a860f746015fafc8de86a66dd3cddf6d909cc6e/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/9acf7f68d0c458ba709201e46dc3b48b9eb3ea2c44dcdf6612ccb14279258daa/image4.jpg',
                'https://i2.au.reastatic.net/1530x841/ad1455b9524d89b2bf766417a4aa4239e6b0ccfaaea2922f3f6e0d5c01073f66/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/1852bf2941893eb482bfec835cb65cfc88e6fffc195ddf838dcfeb15c4f9b811/image7.jpg',
                'https://i4.au.reastatic.net/1530x841/499e52a8c7d5ff2c233dead85066eadab2e125020c9c1da07dc45c17b5a8063e/image8.jpg',
                'https://i1.au.reastatic.net/1530x841/6bd0ea4b4c4dede3bca1d3e8a8c96329dc93bf476a157747bf1d887baed6be04/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/ad21025552582ceb563663d1604574b31d4c441b1fdaea06531d5fb63db624d2/image10.jpg',
                'https://i3.au.reastatic.net/1530x841/bac1e1b02db8aeb22b330e7b400a1ce96b279c383c483562b28b56517f54cc9e/image11.jpg',
                'https://i4.au.reastatic.net/1530x841/c2425bb390c2da7bac699b8bcec22823e7f94a887c9981c54e55a7a600a5d4bc/image12.jpg'
            ]), 
            'mini_desc'=>'<p>This house is bigger than you think! If you are looking for space, this is it! This lovely 4 - 5-bedroom home sits on flat 532m2 is waiting for a new owner.</p>',
            'floor_plan' => '', 
            'address' => '33 Lewis Place, Calamvale QLD 4116', 'lat' => $lat, 'lng' => $lng, 'landsize' => 532, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '40 Alan Crescent, Eight Mile Plains QLD 4113',  'caption' => $capt,
            'desc' => '<p>Perfect for any type of buyer whether you are a first home buyer, family or investor, this property is incredibly low maintenance and is an affordable lifestyle choice or excellent investment.</p><p>This solid brick lowset home is situated on a 677m2, opposite Raymond Road Park which is never to be developed, in the very sought after suburb of Eight Miles Plains. The street is line with lush greenery, stylish present homes, in a safe and friendly neighbourhood. Your new home features three generous size bedrooms with sliding built-in-wardrobes, master bedroom with lavish walk-in-wardrobe and full en-suite with air-conditioning. Well positioned galley kitchen with timber veneer cabinetry and quality appliance all integrated including dishwasher, range hood, electric oven and gas stove. Polished tiles throughout the house for low maintenance living, abundance of natural light complimenting the colour palette of the home, with views of the garden. Main bathroom with full size bath tub, separate toilet, internal laundry with access to the rear yard, double lock up garage with remote, water tank and security screens and blinds. It will be hard not to picture yourself in this home, close to all amenities including but not limited to local shops, schools and highways. </p><ul><li>• Three bedrooms</li><li>Main bathroom and en-suite</li><li>Fully tiles</li><li>Gallery style kitchen with gas stove, electric oven, range hood and dish washer</li><li>Double lock up garage</li><li>Fully fenced yard</li><li>Security screens and doors</li><li>Large back yard</li><li>Previously rented for $500 p/w</li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => null, 'bond' => null, 'car_no' => 2,'bath_no' => 2,'bed_no' => 3, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/938e6613454c8d5d99f1f724fb5eea78cbde97f4f5389aff3936e04711e1099c/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/49d1fafb37644f557b4a97ed6590612c9b57e11a7cea415d637181d8e177b072/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/fc3648939d2becae6eee378c05961f3e6ddf9390d2bfffeb86af09413f809759/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/fc387675cc883108c344e9b0c934baef9dd1a5dfeff19414069d17774cb3ee7d/image4.jpg'
            ]), 
            'mini_desc'=>'<p>Perfect for any type of buyer whether you are a first home buyer, family or investor, this property is incredibly low maintenance and is an affordable lifestyle choice or excellent investment.</p>',
            'floor_plan' => 'https://i1.au.reastatic.net/3060x1682/527a2ea2d3198405784bdc1291592b2b8b2680a5baad1d6b6ab53469c0fabc55/floorplan1.jpg', 
            'address' => '40 Alan Crescent, Eight Mile Plains QLD 4113', 'lat' => $lat, 'lng' => $lng, 'landsize' => 677, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);


        DB::table('listings')->insert(['title' => '63 Ludwick Street, Cannon Hill QLD',  'caption' => $capt,
            'desc' => '<p>What a position! Approximately six kilometres to the CBD, “The Cannon” Boutique Apartments are in the heart of Cannon Hill. It is all about the convenience and value for money.</p><p>You\'ll just love coming home to your own brand new stylish apartment, with contemporary open plan living and quality fixtures and fittings. High ceilings and air-conditioning these apartments are ideal for entertainers and those who appropriated relaxed yet stylish living. </p><p>Hurry as Brisbane\'s first 18-hole Golf course is coming at your doorstep. A sportsman\'s mecca right at the door for leisure, dining and lifestyle. Act now to benefit from the attractive price of the final apartments and the $20k First Home Owners Grant. Their are only a hand full left, so give us a call now because THEY WON\'T LAST LONG! </p><ul><li>1, 2, 3 Bedrooms apartments, master rooms with en-suite</li><li>Split system air-conditioning in the living area and each bedroom</li><li>The huge size of balcony for entertaining and relaxing</li><li>Remote securer car space, lift and entry intercom</li><li>Diversity interior designs for choosing - Each bedroom with built in or walk in robe</li><li>European design Kitchen with stainless steel appliances</li><li>Two-Pac paint on kitchen cupboards, stone bench tops with quality tile splashback</li><li>All bedroom floors are laid with high quality fire rating carpet.</li><li>Each unit includes dishwasher, dryer and LED lighting</li><li>Rooftop communal BBQ area.</li><li>Bus and shops at your doorstep</li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 539000, 'bond' => null, 'car_no' => 1,'bath_no' => 2,'bed_no' => 2, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/cb9bf48521998a346df79c4394c3919e82500aa59c3fa56199a886372eb7373c/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/19fc163bfdf0ee81248fe5b6d86e6c96cff886b85b56588f37bd5c557eabb3f9/image2.jpg',
                'https://i4.au.reastatic.net/1530x841/1bf926f02784607c91bd5bdab337cef97b104daea118043424730a6a21a7450c/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/516cd5606077120212fcad8543f5bfca91145ab9561b31672ce8e300bc1072a8/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/e03c0fb05c1a39146cd37b0c8e801f996e9a48989a6413a1c9dd7449f2ae3408/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/74957a3c569740009bba084e91c69b1a9f96ee0f839b81ec22d24b365a4c12ac/image7.jpg',
                'https://i4.au.reastatic.net/1530x841/e77a2a347cc4d90fb0a1bed3fb23ec4bd10d73209c59b040a7fc2d016338c410/image8.jpg',
                ''
            ]), 
            'mini_desc'=>'<p>What a position! Approximately six kilometres to the CBD, “The Cannon” Boutique Apartments are in the heart of Cannon Hill. It is all about the convenience and value for money.</p><p>You\'ll just love coming home to your own brand new stylish apartment, with contemporary open plan living and quality fixtures and fittings. High ceilings and air-conditioning these apartments are ideal for entertainers and those who appropriated relaxed yet stylish living.</p>',
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1682/af75a151df78acf924dedd7e4c8a6daa40a054907c8d1653e30cf5edcf1748b7/floorplan1.jpg', 
            'address' => '63 Ludwick Street, Cannon Hill QLD', 'lat' => $lat, 'lng' => $lng, 'landsize' => 79, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '212/18 Thorn Street, Kangaroo Point QLD 4169',  'caption' => $capt,
            'desc' => '<p>On the Fringe of Brisbane CBD in vibrant Kangaroo Point</p><p>Peninsula Apartments are in the heart of vibrant Kangaroo point, surrounded by cafes, shops, pubs, restaurants and grocery stores.</p><p>This apartment bought as an investment property was previously rented out for $500.00 per week but now vacant.</p><p>Near new two bedrooms, two bathrooms, one car park apartment located in the Peninsula Apartment Complex with countless lifestyle attractions and features.</p><ul><li>Master with built-in-wardrobe and en-suite and assess to main balcony</li><li>Extensive living and balcony area</li><li>Sleek new kitchen with dishwasher, stove and oven</li><li>Built-in-fridge with ample storage space</li><li>Ducted air-condition throughout the apartment</li><li>Security intercom, secure car parking</li><li>Walking distance to shops and public transport </li><li>Apartment complex features, pool, gym and BBQ area</li><li>Walking distance to Mowbray Park City Cat stop</li></ul><p>Kangaroo Point is vibrant and highly sought-after location; this apartment is most deserving of an inspection.</p>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 495000, 'bond' => null, 'car_no' => 1,'bath_no' => 2,'bed_no' => 2, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841d/7e5ec4494ed1d0dc2b1770cb165234c7869e3dac644276c7debbb464a2c4c188/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/10586e9fa48a0b069398a075ffa23ea22d1030a81224d7edabb1044eafd9c51d/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/7ed73c6d69141d5d478b6c6e02df8bd57758ab51fe22a18ccaca877161f9dad8/image3.jpg',
                'https://i4.au.reastatic.net/1530x841/e336cb10006a7ac22e52627d2b6a098c6309e7662f9cb26aca6a3705e45e82a6/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/cd01687e22e1b26d51382e4ae0b6cf28376eda4c8016224cb4ff5b5ed44c1c9e/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/7cf5cfbae2a12293a4becff5bd8843e5d881440164706cb38169ca6f291969b0/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/7dbf876f599dabef937c5476dd3bcfbee6141ff3dcbc24da787886b5e150de02/image7.jpg',
                'https://i4.au.reastatic.net/1530x841/fb932aacbde6d0d4fa29b6b6fc1e51af2060b6c4f79be98f2931a652e35bc832/image8.jpg',
                'https://i1.au.reastatic.net/1530x841/6619fe80fa621ef4805853f48008e9e736dd1a3314df0bc0a91a4f5f713bfee7/image9.jpg',
                'https://i4.au.reastatic.net/1530x841/d63ccc6b42b98b59630841f7558ff8063a598691bb1a2a3f8a94873dde52daa8/image12.jpg'
            ]), 
            'mini_desc'=>'<p>On the Fringe of Brisbane CBD in vibrant Kangaroo Point</p><p>Peninsula Apartments are in the heart of vibrant Kangaroo point, surrounded by cafes, shops, pubs, restaurants and grocery stores.</p><p>This apartment bought as an investment property was previously rented out for $500.00 per week but now vacant.</p><p>Near new two bedrooms, two bathrooms, one car park apartment located in the Peninsula Apartment Complex with countless lifestyle attractions and features.</p>',
            'floor_plan' => 'https://i1.au.reastatic.net/3060x1682/212a9fc84d5161f4c034494ad613dc683d72296288c8f3e41244b546a64aad42/floorplan1.jpg', 
            'address' => '212/18 Thorn Street, Kangaroo Point QLD 4169', 'lat' => $lat, 'lng' => $lng, 'landsize' => 80, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '271/30 Macossan Street, Brisbane CBD QLD 4000',  'caption' => $capt,
            'desc' => '<p>This is your exclusive opportunity to buy in Brisbane CBD.</p><p>Not often does an apartment of this quality and size come on the market with endless potential for owner occupiers or investors. </p><p>This seamless apartment is located 10 meters from the Brisbane River, 10 minutes’ walk to Queens street mall and restaurant districts or 5 minutes’ drive, 20 meters to Eagle Street Pier CityCat or City Hopper ferry service.</p><p>With views down the river from your balcony to your left and city view from your balcony to your right, this apartment will make the perfect spot to view Riverfire in September plus enjoy Brisbane’s superb weather all year around.</p><p>Boasting three bedrooms, two bathrooms and effortless combine living, dining and lounge area that opens to your designer kitchen and entertainer’s balcony. Master bedroom incorporates light and low maintenance living with en-suite and walk-through wardrobe.</p><ul><li>Incredible chef’s kitchen</li><li>Sleek master bedroom with, en-suite and walk through wardrobe</li><li>Two addition bedrooms with built-in-wardrobes</li><li>Immaculate main bathroom</li><li>Separate laundry</li><li>Ducted air-conditioning throughout</li><li>Minutes’ to public transport</li><li>Stone’s throw away from restaurants, cafés and shops</li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 799000, 'bond' => null, 'car_no' => 1,'bath_no' => 2,'bed_no' => 3, 
            'img_url' => 'https://i4.au.reastatic.net/1530x797,r=33,g=40,b=46/a267b53713fa9a2ecb919396defc4c2c3ffac7297f7c5e322b24b7adb370202e/image4.jpg', 
            'img_urls' => json_encode([
                'https://i1.au.reastatic.net/1530x797-,extend/97a8ac8c2d10c30436ef96cf360307743d385d0a6a1f954b20db64fadfa15d66/image5.jpg',
                'https://i2.au.reastatic.net/1530x797-r=33,g=40,b=46/2c87474cf5b347c1c45c5526043d9bd5ae3da383c1d2aa9fd2f455c2d3b447ad/image6.jpg',
                'https://i3.au.reastatic.net/1530x797-46/6799bf765c8a6508538a24d4af8ec22df6c12905ba230880dfa0bda1a1bade66/image7.jpg',
                'https://i4.au.reastatic.net/1530x797-resiz46/34675ce74b0eec5efac839b5755f1d9b6b8383c344d43a1585614e9f8d24b1d3/image8.jpg',
                'https://i1.au.reastatic.net/1530x797-res,r=33,g=40,b=46/32a956f472f030ffaf8901205c36c773a5643acc9c1b2ea72890fdc4c0ccf9c8/image9.jpg',
                'https://i2.au.reastatic.net/1530x797-resi40,b=46/8df0f9be006f40ee69a46b241fd19503ddf36f844bb0724de86dea48d2f5eaf3/image10.jpg',
                'https://i3.au.reastatic.net/1530x797-resiz40,b=46/b6948a4ac1a549c2d6eeb4f494fba0331c8e008dddbe51af8cb39fef1b920f24/image11.jpg',
                'https://i4.au.reastatic.net/1530x797/629ad48e388ed396a16150fa33de099b1667d4f9cbff0615f2d5a4bda8af79e4/image12.jpg',
                'https://i1.au.reastatic.net/1530x797/6af287656fafff20a3b7263bc19e4f55247655b7ecbad0a119aacf472666fedb/image13.jpg',
                'https://i2.au.reastatic.net/1530x797/4277480c724d2b927ea11ad2fec63642e073a52e40f0209062728cdd3082c3b3/image14.jpg'
            ]), 
            'mini_desc'=>'<p>This is your exclusive opportunity to buy in Brisbane CBD.</p><p>Not often does an apartment of this quality and size come on the market with endless potential for owner occupiers or investors. </p><p>This seamless apartment is located 10 meters from the Brisbane River, 10 minutes’ walk to Queens street mall and restaurant districts or 5 minutes’ drive, 20 meters to Eagle Street Pier CityCat or City Hopper ferry service.</p>',
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1594-ree,r=33,g=40,b=46/dad97529dcbea5ee8c1aa16168804114707690d1e2b3f0cbb275eb1e49b09ed7/floorplan1.jpg', 
            'address' => '271/30 Macossan Street, Brisbane CBD QLD 4000', 'lat' => $lat, 'lng' => $lng, 'landsize' => 134, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);


        DB::table('listings')->insert(['title' => '512/113 Commercial Road, Teneriffe QLD 4005',  'caption' => $capt,
            'desc' => '<p>Sleek and well-designed this apartment is in the heart of Tenerife in prime position. Located at walking distance to everything you need Restaurants, Lifestyle, Shops, Grocery’s and Entertainment, your every want is right here. </p><p>Fusing stylish and contemporary appointments, this apartment’s layout is enhanced by sleek white tones, high ceiling, and large windows. Light soaked alfresco balcony which complements living in Queensland and enjoying the lifestyle. </p><p>This exclusive boutique complex features an impressive rooftop garden space which overlooks the surrounding district providing a vibrant backdrop when entertaining friends and family around the BBQ facilities.</p><ul><li>Two bedrooms, both with carpet and built-in-wardrobes</li><li>En-suite with his and hers vanities</li><li>Main bathroom with full size bath tube</li><li>Large outdoor balcony</li><li>Sleek and practical kitchen with glass splashback and electric appliance</li><li>Open plan living, dining and kitchen with glass sliding doors to balcony</li><li>DoubleOne 3 Apartments </li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 799000, 'bond' => null, 'car_no' => 1,'bath_no' => 2,'bed_no' => 2, 
            'img_url' => 'https://i1.au.reastatic.net/1530x841/a620744a00c99a062564c338d6d3f9a81b0f9eb642984c8be2ff75d7271529ac/main.jpg', 
            'img_urls' => json_encode([
                'https://i2.au.reastatic.net/1530x841/8d5ef63c58b9b12904888cb308f07f72d40ca5bf081e3e155a35bcac9ae89626/image2.jpg',
                'https://i4.au.reastatic.net/1530x841/2c8aec4f26a82a4b8190c4d8b4b00248771247712e04bc589e1c66c943b3cc58/image4.jpg',
                'https://i1.au.reastatic.net/1530x841/560b8dcd68153b9f143b7ca12d57e8472e3f0ecd45d7fc7f28164ef3942a6f9e/image5.jpg',
                'https://i2.au.reastatic.net/1530x841/ca46d6fa090a236db54a0f6d88d3ecb9951fb3d777e3ce750d795a1fd92c9e63/image6.jpg',
                'https://i3.au.reastatic.net/1530x841/4e18d700d6aececd586c37f2cb67e27f93f2278c2f4ca223a844987efc29d964/image7.jpg',
                'https://i4.au.reastatic.net/1530x841/1a1dcef1badfc3f2a8e6b2d4622ac0bef3c850c2f9304700e8a431c9ba6ef979/image8.jpg',
                'https://i1.au.reastatic.net/1530x841/91753ab1c90f5f7c0f580dc7677742791fe8ebd2b875cca43338075eff43aec7/image9.jpg',
                'https://i2.au.reastatic.net/1530x841/82221040082c9922cfd8056b6122023d5e63f9cd25502ff4ff0b4df65d1b49df/image10.jpg',
                'https://i3.au.reastatic.net/1530x841/c97682602c757a16ae5c6819a88e92e988cb89ddb57a50bf318356d8aa48269c/image11.jpg',
                'https://i2.au.reastatic.net/1530x841/152e21e742278039eec0f5eecdba659670637763a50ccc05f16a036edac7cbdd/image14.jpg'
            ]), 
            'mini_desc'=>'<p>Sleek and well-designed this apartment is in the heart of Tenerife in prime position. Located at walking distance to everything you need Restaurants, Lifestyle, Shops, Grocery’s and Entertainment, your every want is right here. </p><p>Fusing stylish and contemporary appointments, this apartment’s layout is enhanced by sleek white tones, high ceiling, and large windows. Light soaked alfresco balcony which complements living in Queensland and enjoying the lifestyle. </p>',
            'floor_plan' => 'https://i2.au.reastatic.net/3060x1682/67a7a20b4936fc532fe98e1f503c9ac416473947ba79ce0ed88dca668f179eec/floorplan1.jpg', 
            'address' => '512/113 Commercial Road, Teneriffe QLD 4005', 'lat' => $lat, 'lng' => $lng, 'landsize' => 101, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('listings')->insert(['title' => '605/8 Kyabra Street, Newstead QLD 4006',  'caption' => $capt,
            'desc' => '<p>With a contemporary urban style, Hopscotch Apartments is setting the standard for vibrant and elegant apartment living in Newstead. The whole apartment wraps itself around an open living design to engage not only indoor living but also the best of the outdoor living in Brisbane. </p><pFeaturing two bedrooms, the master contains built-in-wardrobes and en-suite, coupled with floor-to-ceiling glass sliding doors which lead out to an undercover balcony, perfect for your morning coffee. </p><p>Second bedroom also has built-in-wardrobe and access to the second bathroom with built-in laundry. The abundance of natural light throughout the whole apartment compliments the stainless steel appliances in the kitchen, with an added feature of charcoal tiled splashback, white two pack painted lower cupboards and wooden finishing for the top cupboards, makes this apartment unique in style and very versatile. </p><p>Split systems heating and cooling, single car-park space with access to visitor car-park and a brand new car waiting for you, rooftop BBQ area: Nothing has been spared in the communal areas. Built-in BBQ facilities with bench-tops, sink and dining tables and chair with sunbed to relax and take in the views to the west of Brisbane, as you entertain your guests in Brisbane’s tropical weather. </p><p>Low Body Corporate Fees, minutes to fine dining, cafes, gym, shopping at Gasworks, James Street or CBD, your opportunity is now to ‘Seize the day’. </p><ul><li>Two Bedrooms</li><li>Two bathrooms including en-suite of the master</li><li>Split heating and cooling</li><li>Pet Apartment Complex</li><li>Low Body Corporate Fees</li><li>SS security screens doors</li><li>Internal intercom system</li><li>Brand New Car & Furniture Package Available</li><li>Carpet through soft living areas e.g. bedroom and living</li><li>Fine dining, shopping, cafes and gym all at a stone throw away </li><li>Secure basement parking with lift access and visitor car-park facilities</li><li>Stunning rooftop entertaining areas with built in BBQ facilities with views to the west</li><li>Brisbane CBD, Gasworks, James Street, Emporium all at walking distance</li><li>Hopscotch can qualify some buyers for the $20,000 First Home Owner Grant</li></ul>', 
            'prop_type' => 'house', 'type' => 'resale', 'price' => 599000, 'bond' => null, 'car_no' => 1,'bath_no' => 2,'bed_no' => 2, 
            'img_url' => 'https://i4.au.reastatic.net/1530x841/443723a056c4f602308f1db98b7b2f8fe19a3c271a4ea9768d7fb4353db973b1/image4.jpg', 
            'img_urls' => json_encode([
                'https://i3.au.reastatic.net/1530x841/6cc0e076b3c5a34b53669842ebfc77975c24fabc7f48902a1e94210527d5d636/image3.jpg',
                'https://i1.au.reastatic.net/1530x841/4e2de716f3ab75ffd21b5e24db994c1f1b29de14ac3f769fd2f9f9d776537824/main.jpg',
                'https://i2.au.reastatic.net/1530x841/2ece66d690c69b5f6db552113f08b97c38c0f11d970d8e03c8c6776de0310a55/image2.jpg',
                'https://i3.au.reastatic.net/1530x841/638dfc702eda1d45412a2a737310d3f730575b754fd54733330195f9d0cd7e27/image7.jpg',
                'https://i1.au.reastatic.net/1530x841/7a314e42b67c88d4acfbbe5dec697cb1b0763aff56a90342f5fd21b77ec84dce/image9.jpg',
                'https://i4.au.reastatic.net/1530x841/530c62b8c35995db07359cc3d8e551eab5555a16d54c00069f045c0ca29c243d/image12.jpg',
                'https://i1.au.reastatic.net/1530x841/3a7da9c0b1e66714545509219ccafe991a5d7624f74cb0c8ef0640af1eee5719/image13.jpg',
                'https://i2.au.reastatic.net/1530x841/4597e22aff0dd2c2cf4c557354eae7360e6ddf52fea5c3bbb239e6206ab42b2a/image14.jpg',
                'https://i3.au.reastatic.net/1530x841/8653840b16dbf757ccfdd2f95401413b490545e0e13b324f1da82498c090eb2e/image15.jpg'
            ]), 
            'mini_desc'=>'<p>With a contemporary urban style, Hopscotch Apartments is setting the standard for vibrant and elegant apartment living in Newstead. The whole apartment wraps itself around an open living design to engage not only indoor living but also the best of the outdoor living in Brisbane. </p>',
            'floor_plan' => '', 
            'address' => '605/8 Kyabra Street, Newstead QLD 4006', 'lat' => $lat, 'lng' => $lng, 'landsize' => 100, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);


        //<ul><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li></ul>

        // for ($i=0;$i<=9;$i++){
        //     DB::table('projects')->insert(['title' => 'Project ' . $i,  'caption' => $capt,'desc' => $desc, 'img_url' => self::getImg(), 'created_at' => $dt, 'updated_at' => $dt]);
        // }


        DB::table('projects')->insert(['title' => 'Arbour',  'caption' => 'Arbour',
            'mini_desc' => '<p>The enormously successful Arbour on Charlotte in Chermside positions buyers perfectly to capitalise on the benefits of owning property in one of Brisbane\'s top 10 suburbs for economic growth.</p>',
            'desc' => '<p>The enormously successful Arbour on Charlotte in Chermside positions buyers perfectly to capitalise on the benefits of owning property in one of Brisbane\'s top 10 suburbs for economic growth.</p><p>Arbour stage two comprises an eight storey architecturally gracious building, offering spacious one and two bedroom apartments with liveable outdoor terraces and basement car spaces, plus motorcycle parking.</p><p>Located within a short 10-minute walk of one of Queensland\'s largest retail centres, Chermside Shopping Centre, and the major bus interchange, is the epitome of convenience. It is what the young, professional and white-collar workforce is seeking from this suburb - a walkable, connected and amenity rich address.</p><p>The combination of timeless design, quality in materials, sound planning and the robust research underpinning the development ensures that Arbour will deliver long-term value for both investors and owner-occupiers.</p>', 
            'img_url' => $dImgPath . 'arbour/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath . 'arbour/AdditionalPhotos/img1.jpg',
                $dImgPath . 'arbour/AdditionalPhotos/img1.jpg'
            ]), 
            'floor_plan' => $dImgPath . 'arbour/Floorplans/img1.pdf', 
            'sold' => true,
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Hamilton',  'caption' => 'Hamilton',
            'mini_desc' => '<p>Dare to compare with Atria at Hamilton Reach.</p><p>Apartments and terrace homes with more space, more inclusions, more value and more opportunity.</p><p>Perfectly located within Hamilton Reach, in the prestigious suburb of Hamilton, the final release at Atria offers a value proposition like no other.</p><p>Thoughtfully designed to echo our unique Queensland lifestyle, Atria contains calm, subtropical spaces that maximise natural light and infuse gentle breezes throughout.</p>',
            'desc' => '<p>Dare to compare with Atria at Hamilton Reach.</p><p>Apartments and terrace homes with more space, more inclusions, more value and more opportunity.</p><p>Perfectly located within Hamilton Reach, in the prestigious suburb of Hamilton, the final release at Atria offers a value proposition like no other.</p><p>Thoughtfully designed to echo our unique Queensland lifestyle, Atria contains calm, subtropical spaces that maximise natural light and infuse gentle breezes throughout.</p><p>Beautifully nestled amongst 2.5 hectares of pristine parkland, overlooking 530 metres of river frontage and adjoining the Royal Queensland Golf Club, Hamilton Reach offers a welcome change of pace from city life. Enjoy a welcome reprieve with a walk around the RiverWalk and beach, or sit back and relax with a coffee at the Northshore Riverside Cafe conveniently located on your doorstep. Or jump on a CityCat at the nearby Northshore Hamilton CityCat terminal providing direct connectivity with the Brisbane CBD, cultural and entertainment precincts, universities and picturesque riverside suburbs. Hamilton Reach is part of Brisbane’s largest urban renewal precinct, Northshore Hamilton.When complete, the Northshore Hamilton vision is to deliver a vibrant, mixed-use masterplanned community of over 15,000 residents and 15,000 office workers, integrated with innovative urban design and world-class infrastructure.</p>', 
            'img_url' => $dImgPath . 'hamilton/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath . 'hamilton/AdditionalPhotos/img1.jpg',
                $dImgPath . 'hamilton/AdditionalPhotos/img2.jpg',
                $dImgPath . 'hamilton/AdditionalPhotos/img3.jpg',
                $dImgPath . 'hamilton/AdditionalPhotos/img4.jpg',
                $dImgPath . 'hamilton/AdditionalPhotos/img5.jpg',
                $dImgPath . 'hamilton/AdditionalPhotos/img6.jpg',
                $dImgPath . 'hamilton/AdditionalPhotos/img7.jpg',
            ]), 
            'sold' => true,
            'floor_plan' => $dImgPath . 'hamilton/Floorplans/img1.pdf', 
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Mango Hill',  'caption' => 'Mango Hill',
            'mini_desc' => '<p>Capestone, Mango Hill’s newest community offers contemporary designer homes surrounded by wide streetscapes, spacious shaded landscapes, cooling bay breezes,a future 13 hectare lake and vibrant town and business centre. Capestone promises to be lakeside living the way it should be.</p>',
            'desc' => '<p>Capestone, Mango Hill’s newest community offers contemporary designer homes surrounded by wide streetscapes, spacious shaded landscapes, cooling bay breezes,a future 13 hectare lake and vibrant town and business centre. Capestone promises to be lakeside living the way it should be.</p><ul><li>Easy access to Capestone Boulevard to surrounding amenities and facilities.</li><li>A variety of homesites from 216sqm – 707sqm.</li><li>Level allotments.</li><li>Local park on your doorstep offering landscaped gardens, outdoor space with shade structure to enjoy cool breezes.</li><li>Conveniently located to St Benedict’s Catholic College.</li><li>Only 35 minutes to Brisbane CBD.</li><li>Future Mango Hill Rail Station is just a short walk away</li></ul>', 
            'img_url' => $dImgPath . 'mangohill/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath . 'mangohill/AdditionalPhotos/img1.jpg',
                $dImgPath . 'mangohill/AdditionalPhotos/img1.jpg'
            ]), 
            'sold' => true,
            'floor_plan' => $dImgPath . 'mangohill/Floorplans/img1.bmp', 
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Nero',  'caption' => 'Nero',
            'mini_desc' => '<p>Combining the refined opulence of a five star hotel with exceptional facilities and a prime location, Nero presents nine levels of contemporary apartment living in a striking architectural form.</p>',
            'desc' => '<p>Combining the refined opulence of a five star hotel with exceptional facilities and a prime location, Nero presents nine levels of contemporary apartment living in a striking architectural form.</p><p>Designed by multi-award winning Brisbane firm Ellivo Architects, Nero makes a dramatic visual statement with high contrasts and emphatic horizontal flourishes. Capturing both classic style and contemporary punch, the elegant tiered edifice accommodates 107 luxury apartments, a remarkable range of public spaces designed to deliver a true community atmosphere, and dense sub-tropical landscaping that welcomes you to a sense of privacy and sanctuary</p><p>Step inside a remarkable entry space. With dappled light filtering from the adjacent garden, the Nero Reception and Lobby area provides an inviting and stylish entry and the adjacent stunning lounge/library provides a relaxing comfortable retreat area with access to facilities such as a meeting room and expresso machine. Street-facing apartment courtyards, driveway and essential services complement and activate the Doggett St frontage. With four levels of resident and visitor parking, and an astonishing suite of superbly landscaped, north-facing recreational facilities on level 3, enjoy an outstanding level of in-house amenity.</p>', 
            'img_url' => $dImgPath . 'nero/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath . 'nero/AdditionalPhotos/img1.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img2.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img3.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img4.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img5.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img6.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img7.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img8.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img9.jpg',
                $dImgPath . 'nero/AdditionalPhotos/img10.jpg'
            ]),
            'sold' => true, 
            'floor_plan' => $dImgPath . 'nero/Floorplans/img1.pdf', 
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Soko',  'caption' => 'Soko',
            'mini_desc' => '<p>SOKO Waterfront Apartments are located in West End, Brisbane’s most dynamic new urban environment. Only 2km from the Brisbane CBD and 1.5km from Brisbane’s iconic South Bank with access to an abundance of renowned restaurant, bar, retail and transport options. South Bank is also Queensland’s premier arts and entertainment centre including GOMA (Gallery of Modern Art) and the QPAC (Queensland Performing Arts).</p>',
            'desc' => '<p>SOKO Waterfront Apartments are located in West End, Brisbane’s most dynamic new urban environment. Only 2km from the Brisbane CBD and 1.5km from Brisbane’s iconic South Bank with access to an abundance of renowned restaurant, bar, retail and transport options. South Bank is also Queensland’s premier arts and entertainment centre including GOMA (Gallery of Modern Art) and the QPAC (Queensland Performing Arts).</p><p>Located on a prestigious riverfront site, SOKO Waterfront Apartments delivers an impressive array of features including an expansive rooftop retreat, luxurious pool with wet edge seating, outdoor kitchen and entertaining spaces. All with unparalleled access to river and city views. Encompassing only 120 contemporary residences offering a choice of thoughtfully planned one, two and three bedroom options all bathed in sophistication, style and class.</p><p>Each residence is designed to incorporate the spacious balconies seamlessly into the living area. Glass balustrades allow for an uninterrupted view, taking full advantage of the Brisbane River and city vistas. Each kitchen boasts state of the art European stainless steel appliances, stone bench tops, contemporary cabinetry with soft close drawers, gas cook-tops and energy efficient ovens and dishwasher. Three Bedroom apartments also offer a wok burner, luxurious wine fridges, built-in coffee machines and microwaves, integrated fridge and filtered water supply along with upgrades in flooring and finishes. While top floor residences embrace the extensive city and river views, ground floor apartments incorporate river views and private, beautifully landscaped courtyards</p><ul><li>Canoe storage</li><li>Rooftop swimming pool</li><li>Rooftop sauna</li><li>Rooftop BBQ outdoor kitchen</li><li>Rooftop outdoor cinema</li><li>Bike racks</li><li>Car Number Plate Recognition System</li><li>Security CCTV system</li><li>Intercom with visual to the lobby entry and the visitor parking boom gate</li><li>Larger Apartment entry doors</li><li>Gas point on balcony</li><li>Gas reticulation.</li></ul>', 
            'img_url' => $dImgPath . 'soko/HeroPhotos/img1.jpeg', 
            'img_urls' => json_encode([
                $dImgPath . 'soko/AdditionalPhotos/img1.jpeg',
                $dImgPath . 'soko/AdditionalPhotos/img2.jpeg',
                $dImgPath . 'soko/AdditionalPhotos/img3.jpeg',
                $dImgPath . 'soko/AdditionalPhotos/img4.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img5.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img6.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img7.jpeg',
                $dImgPath . 'soko/AdditionalPhotos/img8.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img9.jpeg',
                $dImgPath . 'soko/AdditionalPhotos/img10.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img11.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img12.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img13.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img14.jpg',
                $dImgPath . 'soko/AdditionalPhotos/img15.jpg'
            ]), 
            'sold' => true,
            'floor_plan' => $dImgPath . 'soko/Floorplans/img1.pdf', 
            'created_at' => $dt, 'updated_at' => $dt]);


        DB::table('projects')->insert(['title' => 'Alton',  'caption' => 'Alton',
            'mini_desc' => '<p>Combining functionality with contemporary architectural design, Azure’s latest edition of terrace homes is a thoughtful new approach to meticulously planned suburban living in the heart of Richlands.</p>',
            'desc' => '<p>Combining functionality with contemporary architectural design, Azure’s latest edition of terrace homes is a thoughtful new approach to meticulously planned suburban living in the heart of Richlands.</p><p>A harmonious blend of contemporary architecture is showcased in Alton Edition\'s three distinctive terrace designs.Every home’s living space flows to a private outdoor alfresco courtyard featuring manicured turf, a feature tree with glimpses beyond to the hedging and jacaranda trees planted in common open areas. The bespoke architectural design and careful orientation of this collection of 58 terraces showcases the fundamental elements of liveability.</p><p>Just 10 minutes away in Greater Springfield, discover the expansive green heartland of Robelle Domain. Explore shaded paths, enjoy water cascades and interactive play areas, admire public art, experience community events and refresh yourself at Orion Lagoon.</p><p>Alton is only a short stroll away from Richlands Plaza with a Woolworths supermarket, cafés and gymnasium. Just 5 minutes’ drive away, Forest Lake Village Shopping Centre has a tempting range of boutiques, beauty salons and other pleasures to discover.</p><ul><li>Surrounded by extensive manicured gardens</li><li>Private outdoor alfresco courtyards</li><li>An intimate neighbourhood-scale form, softened and enriched by a superb architectural</li><li>landscape plan</li><li>Visitor car parking</li></ul>', 
            'img_url' => $dImgPath1 . 'altonRichlands/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img3.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img4.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img5.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img6.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img7.jpg',
                $dImgPath1 . 'altonRichlands/AdditionalPhotos/img8.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'altonRichlands/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);


        DB::table('projects')->insert(['title' => 'Auriance',  'caption' => 'Sunnybank Hills',
            'mini_desc' => '<p>No description</p>',
            'desc' => '<p>No description</p>', 
            'img_url' => $dImgPath1 . 'aurianceSunnybankHills/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img3.jpg',
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img4.jpg',
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img5.jpg',
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img6.jpg',
                $dImgPath1 . 'aurianceSunnybankHills/AdditionalPhotos/img7.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'aurianceSunnybankHills/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Cornerstone Living',  'caption' => 'Coopers Plains',
            'mini_desc' => '<p>Cornerstone Living is located in Sunnybank on Brisbane’s south-side, adjoining Banoon Railway Station and benefiting from proximity to numerous schools, Griffith University, hospitals and the employment nodes of Sunnybank and Archerfield/Acacia Ridge.</p><p>To be delivered over a variety of stages, Cornerstone Living will integrate a range of affordable apartment and town home options with public green open spaces and local amenities. A small convenience-based retail centre will be incorporated as part of the latter stages of development.</p>',
            'desc' => '<p>Cornerstone Living is located in Sunnybank on Brisbane’s south-side, adjoining Banoon Railway Station and benefiting from proximity to numerous schools, Griffith University, hospitals and the employment nodes of Sunnybank and Archerfield/Acacia Ridge.</p><p>To be delivered over a variety of stages, Cornerstone Living will integrate a range of affordable apartment and town home options with public green open spaces and local amenities. A small convenience-based retail centre will be incorporated as part of the latter stages of development.</p><p>Cornerstone Living offers well-connected transport links to Brisbane’s CBD and the Gold Coast, Cornerstone Living provides unbeatable convenience. Cornerstone Living is a project of substantial significance and is the largest suburban renewal to take place in Queensland, delivering a 10-hectare residential community over a 10 year period.</p><ul><li>12km to Brisbane CBD</li><li>Short walk to Banoon Train Station</li><li>Primary schools (2 mins)</li><li>Sunnybank Plaza (3 mins)</li><li>Griffith University (5 mins)</li><li>QEII Hospital (2mins)</li><li>M1 Motorway (7 mins)</li><li>Sunnybank Community and Sports Club (5 mins)</li><li>Westfield Garden City (8 mins)</li><li>Toohey Forest Park (5 mins)</li></ul>', 
            'img_url' => $dImgPath1 . 'CornerstoneLivingCoopersPlains/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'CornerstoneLivingCoopersPlains/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'CornerstoneLivingCoopersPlains/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'CornerstoneLivingCoopersPlains/AdditionalPhotos/img3.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'CornerstoneLivingCoopersPlains/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Eve',  'caption' => 'South Brisbane',
            'mini_desc' => '<p>The edges of this stunning residential tower are softened with lush plantings, from the upper-level balconies to the cascading greenery of the street façade. The intelligent landscaping of the podium recreation deck then creates an inviting resort-style atmosphere, with an enticing interplay of light, shade and water.</p>',
            'desc' => '<p>The edges of this stunning residential tower are softened with lush plantings, from the upper-level balconies to the cascading greenery of the street façade. The intelligent landscaping of the podium recreation deck then creates an inviting resort-style atmosphere, with an enticing interplay of light, shade and water.</p><p>With easy access to the city, to Southbank\'s many cultural and recreational attractions and to the cosmopolitan buzz of the West End, the one and two-bedroom apartments at Eve offer the astute purchaser the ultimate in quality, convenience and style.</p><p>Contemporary lines, cool tones and polished timber floors make this an elegant and tranquil retreat, inviting you to add your own decorator touches. At Eve it\'s all about letting the outside in. Large picture windows provide an unimpeded outlook from your spacious open-plan living area.</p>', 
            'img_url' => $dImgPath1 . 'EveSouthBrisbane/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img3.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img4.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img5.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img6.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img7.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img8.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img9.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img10.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img11.jpg',
                $dImgPath1 . 'EveSouthBrisbane/AdditionalPhotos/img12.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'EveSouthBrisbane/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Ivy',  'caption' => 'South Brisbane',
            'mini_desc' => '<p>Location – the most important word in real estate. Ivy is located on Merivale Street in the heart of South Brisbane, the cultural and dining extension of the Brisbane CBD. Attracting 11 million visitors and hosting more than 150 events each year, South Brisbane is the premier precinct for a relaxed and comfortable CBD lifestyle.</p>',
            'desc' => '<p>Location – the most important word in real estate. Ivy is located on Merivale Street in the heart of South Brisbane, the cultural and dining extension of the Brisbane CBD. Attracting 11 million visitors and hosting more than 150 events each year, South Brisbane is the premier precinct for a relaxed and comfortable CBD lifestyle.</p><p>Ivy expresses all that’s best about this dynamic city’s sub-tropical lifestyle. With easy access to the city, to Southbank’s many cultural and recreational attractions and to the cosmopolitan buzz of the West End, the one and two-bedroom apartments at Ivy offer the astute purchaser the ultimate in quality, convenience and style.</p><p>The edges of this stunning residential tower are softened with lush plantings, from the upper-level balconies to the cascading greenery of the street façade. The intelligent landscaping of the podium recreation deck then creates an inviting resort-style atmosphere, with an enticing interplay of light, shade and water.</p><ul><li>750m from Brisbane CBD in the emerging South Brisbane.</li><li>The leader in facilities offered for exclusive use by residents:</li><li>Infinity lap pool</li><li>Pool bar</li><li>Outdoor spa </li><li>Bookable private beach house</li><li>state-of-the-art indoor gymnasium</li><li>Yoga studio</li><li>6 private dining rooms</li><li>Private bar area</li><li>Games and billiards room</li><li>Resident’s only outdoor cinema</li><li>IT pods</li><li>Teppanyaki grill dining and recreation space</li><li>Pizza oven along with BBQ facilities</li></ul>', 
            'img_url' => $dImgPath1 . 'IvySouthBrisbane/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img3.jpg',
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img4.jpg',
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img5.jpg',
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img6.jpg',
                $dImgPath1 . 'IvySouthBrisbane/AdditionalPhotos/img7.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'IvySouthBrisbane/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'New World Towers',  'caption' => 'South Brisbane',
            'mini_desc' => '<p>Overlooking the city lights on the corner of Peel and Cordelia Streets, South Brisbane’s highest point, New World Towers ushers in a new era in lifestyle convenience, connectivity and future-focused design. Embodying an entirely new realm of inner city luxury, New World Towers features innovative architecture and world-class onsite facilities, interwoven into a dynamic community, which captures the effervescent spirit of adventure Brisbane is fast becoming known for.</p>',
            'desc' => '<p>Overlooking the city lights on the corner of Peel and Cordelia Streets, South Brisbane’s highest point, New World Towers ushers in a new era in lifestyle convenience, connectivity and future-focused design. Embodying an entirely new realm of inner city luxury, New World Towers features innovative architecture and world-class onsite facilities, interwoven into a dynamic community, which captures the effervescent spirit of adventure Brisbane is fast becoming known for.</p><p>New World Towers offers world class amenities which include a gym, sauna, spa, infinity edge pool, cinema, rooftop recreation deck with landscaping, private day beds, alfresco dining areas and ground floor retail conveniences, residents’ business lounge and the Explorers Lounge.</p><p>Bathed in subtropical light, these bright, energising living spaces feature exceptional high-end ceramic tiles, cool stone and carpet. A range of chic, designer colour palettes are available, all of which offer a timeless appeal.</p>', 
            'img_url' => $dImgPath1 . 'MagellanSouthBrisbane/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'MagellanSouthBrisbane/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'MagellanSouthBrisbane/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'MagellanSouthBrisbane/AdditionalPhotos/img3.jpg',
                $dImgPath1 . 'MagellanSouthBrisbane/AdditionalPhotos/img4.jpg',
                $dImgPath1 . 'MagellanSouthBrisbane/AdditionalPhotos/img5.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'MagellanSouthBrisbane/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        DB::table('projects')->insert(['title' => 'Springfield Lakes',  'caption' => 'Springfield Lakes',
            'mini_desc' => '<p>Springfield Lakes is a modern suburb of distinct residential villages and leafy streets nestled amongst a greenspace network of parks and lakes. Springfield Lakes makes the most of its topography and green setting to exploit views and celebrate slope-responsive housing.</p>',
            'desc' => '<p>Springfield Lakes is a modern suburb of distinct residential villages and leafy streets nestled amongst a greenspace network of parks and lakes. Springfield Lakes makes the most of its topography and green setting to exploit views and celebrate slope-responsive housing.</p><p>A choice of housing types, from traditional detached homes to contemporary attached housing, ensures a diverse demographic mix and allows the project to respond to a changing market. Springfield Lakes is easy and safe to get around, whether by walking, cycling, driving or on public transport. A lively and memorable public realm active with people walking, neighbours talking and children playing demonstrates the high levels of community interaction. Springfield Lakes demonstrates best practice in design and sets a new benchmark for the region.</p><ul><li><b>Location and Transport</b></li><li>Brisbane CBD 28km</li><li>Ipswich CBD 17km</li><li>Gold Coast 81km</li><li>Services by rail and road</li><li><b>Open Space</b></li><li>120 hectares of open space</li><li>28 parks</li><li>Three lakes spanning 23 hectares</li><li><b>Parks</b></li><li>Robelle Domain</li><li>Grande Park</li><li>Discovery Park</li><li>Orion Lagoon</li><li><b>Education</b></li><li>Quality childcare and preschools</li><li>Public and private primary and secondary schools</li><li>University of South Queensland Springfield Campus</li><li>Bremer Institute of TAFE</li><li><b>Shopping and Lifestyle</b></li><li>Three neighborhood centres (Springfield Fair, Springlake Metro & Springlake Village)</li><li>Orion Springfield Town Centre</li><li>Cafes and restaurants</li><li>Brookwater Gold Club</li><li><b>Medical</b></li><li>Mater Private Hospital</li><li>Local dentists, doctors & allied professionals</li></ul>', 
            'img_url' => $dImgPath1 . 'SpringfieldLakesSpringfield/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'SpringfieldLakesSpringfield/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'SpringfieldLakesSpringfield/AdditionalPhotos/img2.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'SpringfieldLakesSpringfield/Floorplans/img1.png', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        

        DB::table('projects')->insert(['title' => 'Water Point',  'caption' => 'Springfield Lakes',
            'mini_desc' => '<p>When designing and creating WaterPoint Residences\' landscaping, entertainment and health facilities, particular attention has been given to the many details. True character shows only through absolute integrity. Wherever you turn at WaterPoint Residences, the lasting impression is: someone thought about that, too. Such is the essence of style.</p>',
            'desc' => '<p>When designing and creating WaterPoint Residences\' landscaping, entertainment and health facilities, particular attention has been given to the many details. True character shows only through absolute integrity. Wherever you turn at WaterPoint Residences, the lasting impression is: someone thought about that, too. Such is the essence of style.</p><p>With the colourful landscaping, cobblestone paving, cascading waterfall and lighting the entry statement is sure to welcome and impress. WaterPoint\'s gatehouse provides optimal security and safety at all hours. The secure undercover car park and common areas are monitored, and guests are welcomed and announced. Peace of mind.</p><ul><li>HealthPoint – Massage Room, Indoor Pool, Work Out Room, Gymnasium, Sauna, Steam Room and Spa.</li><li>SocialPoint – Gold Class Cinema, Celebration Lounge, Games Room and Library.</li><li>DockPoint – Jetties, Fishing, Kayaking and Broadwater Cruiser.</li><li>Secure Basement Car Parking, BBQ Areas, Outdoor Swimming Pools, Residents Lounge and Gated Community with On-site Security.</li><li>Tranquil Landscape Gardens.</li><li>Rooftop Entertaining-Ocean views, BBQ areas, tables, chairs and sun lounges .</li></ul>', 
            'img_url' => $dImgPath1 . 'WaterpointGoldCoast/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img1.jpg',
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img2.jpg',
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img3.jpg',
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img4.jpg',
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img5.jpg',
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img6.jpg',
                $dImgPath1 . 'WaterpointGoldCoast/AdditionalPhotos/img7.jpg'
            ]), 
            'floor_plan' => $dImgPath1 . 'WaterpointGoldCoast/Floorplans/img1.pdf', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);

        

        //

        //<ul><li>HealthPoint – Massage Room, Indoor Pool, Work Out Room, Gymnasium, Sauna, Steam Room and Spa.</li><li>SocialPoint – Gold Class Cinema, Celebration Lounge, Games Room and Library.</li><li>DockPoint – Jetties, Fishing, Kayaking and Broadwater Cruiser.</li><li>Secure Basement Car Parking, BBQ Areas, Outdoor Swimming Pools, Residents Lounge and Gated Community with On-site Security.</li><li>Tranquil Landscape Gardens.</li><li>Rooftop Entertaining-Ocean views, BBQ areas, tables, chairs and sun lounges .</li></ul>


        $employeeListName = ['Stephen Tam', 'Nicole Tam', 'Clare Yeaw', 'Johan Halim', 'Cassidy Shorland', 'Renaye Wisse'];

        $employeeListImg = ['StephenTam', 'NicoleTam', 'ClareYeaw', 'JohanHalim', 'CassidyShorland', 'RenayeWisse'];

        $employeeListJobTitle = ['Principal', 'Managing Director', 'Operations Director', 'Business Development Director', 'Head of Property Sales', 'Head of Property Management'];

        $employeeListDesc = [
            "<p>Stephen's cultural background, experience in high-level corporate bisness and passion for achieving a premium result are but only a brief as to why he is the driving force of Homestates Group's offshore Asia Pacific devision</p><p>Previously, as the Managing Director of SEG Internation Securities of Hong Kong, Stephen was responsible for all acquisitions, including sales and marketing. In 2005, Stephen opted for a new life in Australia, using his profession skillset towards establising a reputable brand with a focus on client-centric services.</p><p>Currently, Stephone leads the chare in representaiung some of the finest Australian prestige properties in the Asia Pacific region, in addition to acquiring quality investors.</p><p>His approach is sultied for the best possible enviroment to achieve maximum returns for each individual investor and financial institution.</p>",
            "<p>Nicole brings a wealth of property investment experiences of over more than 10 years to her practice. With significat expertise in sourcing and developing properties, and outstanding work ethic and a wide network of Australian and internation business professional, Nicole provides a platform for clients to establish and build successful property protfolio with significant exposure to opportunities typically unreachable without an extensive network.</p><p>Combining practical and hardened experience with industry knowledge, Nicole has created a highly revered name for Homestates in the field of real estate. As one of the primary founders, Nicole supportend the organisational vision of Homestates, focusing on achieving the best possible outcome for clients.</p><p>Nicole's carfully selected team, along with the organsiational goal of assisting each client with a seamless transition makes the overall investment process a truly unforgettable journey towards wealth.</p>",
            "<p>Clares's lifelong passion for real estate, business development and supporting others led her to co-found Homestates, allowing her to share her experience and services on a much broader scale.</p><p>Clare's established gloabal network of clients and busnesses defer to her expertise as their primary intermidiary planner, touting her migration services to be streamlined, accessible and complete. Her Ablility to consistently source the right busness operations to suit each individulat client's requirements arises from her longstanding relationship with legal and financial bodies in Australia. The resulting premium borne from this collaboration ensures that clients receive the highest level of service and satisfaction, in addition to maintaining Homestates' vision as a full-cycle integrated consultancy service.</p><p>Clare's operation embodies Homestates' core pricipal of integrated services by offering clients academic support, ensuring that families receive their preferences for enrolling at their chosen education instutions.</p>",
            "<p>Working in the property industry for over6 years, Johan has guided a litany of migrants, international investors and locals in succesffully achieving financial independence through astutely selected property investments and strategies.</p><p>With the ultimate goal to develop a client-focused approach and equipping investors with propritary tools to build wealth, Johan, along with an experienced cohort of investors founded the Homestates Group.</p><p>Johan's approach to establishing the foundations for his client's property portfolio is grounded in economic fundatmentals: Borne from his studies in accounting, and wealth of experience gained from working in one of Australia's major banking institutions, Johan focuses on assisting clients throughout their property journey, from start to finish.</p>",
            "<p>Cassidy is touted to be one of the new breeds of young professional who have chosen real estate as a career. With over ten years' experience in the real estate industry, Cassidy blends his unique conscientious approach with his experienced and deep local understanding of the Brisbane suburbs.</p><p>Clients know Cassidy best for his authority to keenly identify and understand each individual's personal circumstances and requirements for buying and selling property-with the ability to empathise and capacity to resonate with compassion, Cassidy has earned himself enormous respect and lifelong clientele.</p><p>Cassidy recognises that his chosen career would not be possible without the amiability of his local community, relishing in opportunities that would allow him to extend his support, in any way that he can. He is an avid supporter of the local French shops and infrastructure, inaddition to his charitable ties with the Australian Red Cross.</p>",
            "<p>Born and raised in Brisbane, Renaye has a firm finger on the pulse of the local property market, in addtion to its local surrounding areas. Whilst she prossesses over 10 years' experience in the real estate industry, Renaye continuously strives to monitor and review the shifting landscape of the property market- a penchant which is often her key to repeart and happy clients.</p><p>Renaye is devoted to the welfare of improverished animals, providing 2 dogs and a cat a loving home. She is an avid supporter of the RSPCA, contributing regualarly with food and provisions to her local division.</p>"
        ];

        for ($i=0;$i<count($employeeListName);$i++){
            DB::table('employees')->insert(['name' =>  $employeeListName[$i],  'job_title' => $employeeListJobTitle[$i],'desc' => $employeeListDesc[$i], 'img_url' => 'http://ec2-54-86-237-65.compute-1.amazonaws.com/images/aboutus/'.$employeeListImg[$i].'.jpg', 'created_at' => $dt, 'updated_at' => $dt]);
        }


        DB::table('footer_carousels')->insert(array(
            ['page_type' => 'frontPage', 'primary' => true, 'body' => '"We can warmly recommend Homestates to anyone who appreciates high quality properties with the right price - I can assure that Homestates can be trusted in every situation".', 'name' => 'Jasper & Caroline', 'caption' => 'bought this Homestates', 'img_url' => url('images/frontpage/footer1.jpg')],

            ['page_type' => 'frontPage', 'primary' => false, 'body' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."', 'name' => 'John Doe', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/Image.jpg')],

            ['page_type' => 'buy', 'primary' => true, 'body' => '"Homestates is one of the most responsible real estate companies in Brisbane. They\'ve got the integrity to help clients make sure that their investment journey is smooth and hassle free".', 'name' => 'Charlie', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/person2.jpg')],

            ['page_type' => 'buy', 'primary' => false, 'body' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."', 'name' => 'John Doe', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/Image.jpg')],

            ['page_type' => 'sell', 'primary' => true, 'body' => '"Selling my home with Homestates was the best experience I have had with an agency, in my 20 years of owning a home".', 'name' => 'Doughlas', 'caption' => 'sold with Homestates', 'img_url' => url('images/sell/sellImg1.jpg')],

            ['page_type' => 'sell', 'primary' => false, 'body' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."', 'name' => 'John Doe', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/Image.jpg')],

            ['page_type' => 'rent', 'primary' => true, 'body' => '"We wanted to take this opportunity to express our most heartfelt gratitude to the Homestates team for their professionalism, diligence and drive. The team was always so kind and provided us with invaluable advice at all times".', 'name' => 'Isabella', 'caption' => 'invested with Homestates', 'img_url' => url('images/rent/footerImg1.jpg')],

            ['page_type' => 'rent', 'primary' => false, 'body' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."', 'name' => 'John Doe', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/Image.jpg')],

            ['page_type' => 'projects', 'primary' => true, 'body' => '"Homestates is one of the most responcible real estate companies in Brisbane. They\'ve got the integrity to help clients make sure that their investment journey is smooth and hassle free".', 'name' => 'Charlie', 'caption' => 'bought with Homestates', 'img_url' => url('images/project/footerImg.jpg')],

            ['page_type' => 'projects', 'primary' => false, 'body' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."', 'name' => 'John Doe', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/Image.jpg')],

            ['page_type' => 'migration', 'primary' => true, 'body' => '"I would like to acknowledge Homestates as a highly efficient, supportive and prfessional company. I do not hesitate in anyway, to anyone that Homestates has a truly gifted team, who not only focus on getting the best result, but also cares about all the legalities and an outcome".', 'name' => 'Peter', 'caption' => 'invested with Homestates', 'img_url' => url('images/migration/footerImg1.jpg')],

            ['page_type' => 'migration', 'primary' => false, 'body' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."', 'name' => 'John Doe', 'caption' => 'bought with Homestates', 'img_url' => url('images/buy/Image.jpg')],

            )
        );

        for ($i=0;$i<=5;$i++){
            DB::table('events')->insert(array(
                ['name' => 'Event '.$i,  'caption' => 'caption ' . $i, 'desc' => $desc, 'img_url' => self::getImg(), 'start_date_time' => $dt]
                )
            );
        }

        DB::table('mags')->insert(array(
            ['name' => 'August 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/August2016.jpg', 'pdf_url' => $dPdfUrl . 'August2016.pdf', 'created_at' => '2016-08-01 00:00:00'],
            ['name' => 'December 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/December2016.jpg', 'pdf_url' => $dPdfUrl . 'December2016.pdf', 'created_at' => '2016-12-01 00:00:00'],
            ['name' => 'February 2017',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/February2017.jpg', 'pdf_url' => $dPdfUrl . 'February2017.pdf', 'created_at' => '2017-02-01 00:00:00'],
            ['name' => 'July 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/July2016.jpg', 'pdf_url' => $dPdfUrl . 'July2016.pdf', 'created_at' => '2016-07-01 00:00:00'],
            ['name' => 'June 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/June2016.jpg', 'pdf_url' => $dPdfUrl . 'June2016.pdf', 'created_at' => '2016-06-01 00:00:00'],
            ['name' => 'March 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/March2016.jpg', 'pdf_url' => $dPdfUrl . 'March2016.pdf', 'created_at' => '2016-03-01 00:00:00'],
            ['name' => 'March 2017',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/March2017.jpg', 'pdf_url' => $dPdfUrl . 'March2017.pdf', 'created_at' => '2017-03-01 00:00:00'],
            ['name' => 'May 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/May2016.jpg', 'pdf_url' => $dPdfUrl . 'May2016.pdf', 'created_at' => '2016-05-01 00:00:00'],
            ['name' => 'November 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/November2016.jpg', 'pdf_url' => $dPdfUrl . 'November2016.pdf', 'created_at' => '2016-11-01 00:00:00'],
            ['name' => 'October 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/October2016.jpg', 'pdf_url' => $dPdfUrl . 'October2016.pdf', 'created_at' => '2016-10-01 00:00:00'],
            ['name' => 'September 2016',  'caption' => 'caption', 'desc' => $desc, 'img_url' => $dImgUrl . 'mags/September2016.jpg', 'pdf_url' => $dPdfUrl . 'September2016.pdf', 'created_at' => '2016-09-01 00:00:00'],

            )
        );



        $role = '<p>Homestates is seeking an energetic and committed Property Investment Executive to join our rapidly expanding team.</p><p>Based in Brisbane (Head Office) and Sydney, Homestates specialises in property investment and management, with a focus on long term growth and wealth creation.</p><p>Work alongside a fully supportive back office team and receive exclusive tutorial training to successfully achieve your goals. With your own exclusive prospecting locations in Brisbane, this is a unique position perfect for individuals who want to operate independently on a commision-based structure.</p><p>Expand your real estate credentials and profile with our unique approach to service. We are seeking someone who</p>';
        $qual = '<li>Holds a current Real Estate Certificate of Registration</li><li>Holds Driver\'s License</li>';
        $skills = '<li>Understands the importance of exceptional communication skills in the real estate industry</li><li>Exceedingly motivated and eager to succeed in a highly competitive industry</li>';


        DB::table('careers')->insert(array(
            ['name' => 'Property Investment Executive', 'caption' => 'Brisbane', 'role' => $role, 'qual' => $qual, 'skills' => $skills],
            ['name' => 'Property Consultant',           'caption' => 'Brisbane', 'role' => $role, 'qual' => $qual, 'skills' => $skills],
            )
        );


    }

    public function getImg(){
        return 'https://unsplash.it/400/300?image=' . rand(1,999);
    }
    
    public function getImgs(){
        return json_encode([ self::getImg(),self::getImg(),self::getImg() ]);
    }
}
