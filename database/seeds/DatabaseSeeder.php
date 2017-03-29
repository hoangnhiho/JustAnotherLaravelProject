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
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1682/b5d31ba6ecf0bf38962c5bee4c4722ddd7b5755ba0ad00b280631b7ab8008b75/floorplan1.jpg', 
            'address' => '70 Regents Drive, Redbank Plains QLD 4301', 'lat' => $lat, 'lng' => $lng, 'landsize' => null, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);

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
            'floor_plan' => 'https://i3.au.reastatic.net/3060x1594-resize,r=33,g=40,b=46/96af9a3d0a715dcf4ffbee06daf63902c0776d6a6eee956c52d6f18d5b56abf3/floorplan1.jpg', 
            'address' => '20904/37D Harbour Road , Hamilton CBD QLD 4007', 'lat' => $lat, 'lng' => $lng, 'landsize' => 276, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);
        

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
            'floor_plan' => 'https://i2.au.reastatic.net/3060x1682/4d97b2bac923407e403ee2f90ba8055778c59a4a51969b655e35ec1f7866d920/floorplan1.jpg', 
            'address' => '26 Hanover Drive, Pimpama QLD 4209', 'lat' => $lat, 'lng' => $lng, 'landsize' => 600, 'council_rate' => null, 'water_rate' => null, 'created_at' => $dt, 'updated_at' => $dt]);



        //<ul><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li><li>QQQ</li></ul>

        for ($i=0;$i<=9;$i++){
            DB::table('projects')->insert(['title' => 'Project ' . $i,  'caption' => $capt,'desc' => $desc, 'img_url' => self::getImg(), 'created_at' => $dt, 'updated_at' => $dt]);
        }

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

    }

    public function getImg(){
        return 'https://unsplash.it/400/300?image=' . rand(1,999);
    }
    
    public function getImgs(){
        return json_encode([ self::getImg(),self::getImg(),self::getImg() ]);
    }
}
