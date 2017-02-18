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
            DB::table('listings')->insert(['title' => 'House ' . $i,  'caption' => $capt,'desc' => $desc, 'prop_type' => 'house', 'price' => rand(100000,400000), 'car_no' => rand(1,3),'bath_no' => rand(1,3),'bed_no' => rand(1,5), 'img_url' => self::getImg(), 'img_urls' => self::getImgs(), 'address' => $adr, 'lat' => $lat, 'lng' => $lng, 'landsize' => rand(80,200), 'council_rate' => rand(1000, 1500), 'water_rate' => rand(1000, 1500), 'created_at' => $dt, 'updated_at' => $dt]);
        }

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


    }

    public function getImg(){
        return 'https://unsplash.it/400/300?image=' . rand(1,999);
    }
    
    public function getImgs(){
        return json_encode([ self::getImg(),self::getImg(),self::getImg() ]);
    }
}
