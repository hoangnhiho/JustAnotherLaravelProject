<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Project;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::whereIn('id', [1, 2, 3, 17, 4, 14, 15, 16, 5])->get();

        return view('frontend.projectsIndex', compact('projects'));
    }    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming()
    {
        // $projects = Project::where('upcoming',true)->get();
        $projects = Project::whereNotIn('id', [1, 2, 3, 17, 4, 14, 15, 16, 5])->get();

        return view('frontend.projectsUpcoming', compact('projects'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($projectId)
    {
        $project = Project::find($projectId);
        if (!isset($project)) return 'Something went wrong. Please contact admin.';

        return view('frontend.projectsShow', compact('project'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        // rivers edge, nights edge, spire
        $dImgPath1  = 'http://ec2-54-86-237-65.compute-1.amazonaws.com/images/project/currentProjects/';
        $dt     = Carbon::now()->toDateString();

        // \DB::table('projects')->insert(['title' => 'Night Edge',  'caption' => 'Fortitude Valley',
        //     'mini_desc' => '<p>With a presence that is both sculptural and monumental, Night Edge refracts the sentiment and energy of an incredible city, alive and bursting with ambition. From the incorporated masonry heritage found upon Constance Street to the subtropical boulevard that pierces the heart of the building’s ground floor on Wickham Street, Night Edge’s sculptural form, including its impressive platinum façade, performs in response to its environment.</p>',
        //     'desc' => '<p>With a presence that is both sculptural and monumental, Night Edge refracts the sentiment and energy of an incredible city, alive and bursting with ambition. From the incorporated masonry heritage found upon Constance Street to the subtropical boulevard that pierces the heart of the building’s ground floor on Wickham Street, Night Edge’s sculptural form, including its impressive platinum façade, performs in response to its environment.</p><p>Standing proud and evocative within Fortitude Valley, Night Edge is a stunning residence of 330 apartments over 20 levels. Situated less than two kilometres from the city centre and upon the nexus of Brisbane’s most celebrated cultural hub – Fortitude Valley – Night Edge affords residents the luxury to participate in the magnetism of local bars, nightlife and cafes or curate an unparalleled in-house entertaining experience. One and two bedroom residences are framed by generous terraces that offer stunning views over Brisbane’s city skyline to the South and South West. Luxurious oak herringbone floors are framed by natural white walls creating a canvas for oak edged joinery, beautiful honed marble and a sophisticated pallet of warm grey, charcoal and matt gold. </p>', 
        //     'img_url' => $dImgPath1 . 'NightEdge/HeroPhotos/img1.jpg', 
        //     'img_urls' => json_encode([
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img1.jpg',
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img2.jpg',
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img3.jpg',
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img4.jpg',
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img5.jpg',
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img6.jpg',
        //         $dImgPath1 . 'NightEdge/AdditionalPhotos/img7.jpg'
        //     ]), 
        //     'floor_plan' => $dImgPath1 . 'NightEdge/Floorplans/img1.pdf', 
        //     'sold' => false,
        //     'created_at' => $dt, 'updated_at' => $dt]);

        \DB::table('projects')->insert(['title' => 'Mary Lane',  'caption' => '',
            'mini_desc' => '',
            'desc' => '', 
            'img_url' => $dImgPath1 . 'MaryLane/HeroPhotos/img1.jpg', 
            'img_urls' => json_encode([
            ]), 
            'floor_plan' => '', 
            'sold' => false,
            'created_at' => $dt, 'updated_at' => $dt]);


        //<ul><li>Developed by Consolidated Property Group</li><li>Designed by multi-award winning John Wardle Architects</li><li>Prime CBD location with a Queen Street address</li><li>Ground floor retail fronting both Queen and Ann Streets</li><li>Resident library, theatrette and meeting space</li><li>Roof Top amenity includes: Infinity pool, Gymnasium, Resident dining room designed by award winning Urbane Restaurant, Outdoor BBQ and al fresco dining</li><li>Panoramic views of Brisbane City, Brisbane River, Story Bridge and Mt Coot-tha</li><li>Short walk to: Queen Street mall, Brisbane's fine dining precinct, transport and educational institution</li><li>Experienced on-site management team</li></ul>


    }

}
