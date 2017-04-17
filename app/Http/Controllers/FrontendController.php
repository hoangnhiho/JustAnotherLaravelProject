<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Employee;
use App\Models\FooterCarousel;
use App\Models\Project;
use App\Models\Event;
use App\Models\Mag;
use Mail;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontPage()
    {
        $footerCarousels = self::getFooterCarousel('frontPage');
        return view('frontend.frontPage', compact('footerCarousels'));
    }
    public function buy()
    {
        $footerCarousels = self::getFooterCarousel('buy');
        return view('frontend.buy', compact('footerCarousels'));
    }
    public function sell()
    {
        $footerCarousels = self::getFooterCarousel('sell');
        return view('frontend.sell', compact('footerCarousels'));
    }
    public function rent()
    {
        $footerCarousels = self::getFooterCarousel('rent');
        return view('frontend.rent', compact('footerCarousels'));
    }
    public function projects()
    {
        $footerCarousels = self::getFooterCarousel('projects');
        return view('frontend.projectsIndex', compact('footerCarousels'));
    }
    public function migration()
    {
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.migration', compact('footerCarousels'));
    }



    public function pressMarket()
    {
        $press = true;
        $events = Event::get();
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.press.market', compact('footerCarousels', 'events'));
    }
    public function pressMag()
    {
        $press = true;
        $mags = Mag::orderBy('created_at', 'asc')->get();
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.press.mag', compact('footerCarousels', 'mags'));
    }
    public function pressRoom()
    {
        $press = true;
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.press.main', compact('footerCarousels', 'press'));
    }
    public function pressNews()
    {
        $press = true;
        $events = Event::get();
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.press.news', compact('footerCarousels', 'events'));
    }
    public function pressResearch()
    {
        $press = true;
        $footerCarousels = self::getFooterCarousel('migration');
        $projects = Project::paginate(5);
        return view('frontend.press.research', compact('footerCarousels', 'press', 'projects'));
    }
    public function pressVideo()
    {
        $press = true;
        $footerCarousels = self::getFooterCarousel('migration');
        $projects = Project::paginate(9);
        return view('frontend.press.video', compact('footerCarousels', 'press', 'projects'));
    }
    public function pressEvent()
    {
        $press = true;
        $events = Event::get();
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.press.event', compact('footerCarousels', 'press', 'events'));
    }
    public function pressPromo()
    {
        $press = true;
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.press.promo', compact('footerCarousels', 'press'));
    }
    public function emailPressPromo(Request $request)
    {
        $input = $request->all();
        
        // Send Mail
        $mailData['input']=(object)$input;
        Mail::send('emails.promo', $mailData, function ($message) use ($input,$request){
            $message->to('frank.law@homestates.com.au')->subject('Promo Application');
        });
        //
        $message = 'Thank You';
        $caption = 'Your Promo application has been sent.';
        return view('frontend.message', compact('message', 'caption'));
    }




    public function aboutus()
    {
        // $search = '';
        // if (isset($input['search'])) $search = $input['search'];
        $footerCarousels = self::getFooterCarousel('aboutus');
        $employees = Employee::get();
        // echo json_encode($listings);
        // return json_encode($listings);


        // Adding in other parameters into prev_url and next_url
        // if (isset($input['search'])) $buckets->appends(['search' => $input['search']])->links();
        return view('frontend.aboutus', compact('employees', 'footerCarousels'));
    }

    public function getFooterCarousel($pageType)
    {
        $footerCarousels = FooterCarousel::where('page_type', $pageType)->orderBy('primary', 'desc')->get();
        return $footerCarousels;
    }

}
