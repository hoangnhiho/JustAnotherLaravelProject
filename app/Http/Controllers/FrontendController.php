<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Employee;
use App\Models\FooterCarousel;
use App\Models\Project;
use App\Models\Event;
use App\Models\Mag;
use App\Models\Research;
use App\Models\Market;
use App\Models\News;
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
        $projects = Project::limit(6)->get();
        return view('frontend.projectsIndex', compact('projects','footerCarousels'));
    }

    public function migration()
    {
        $footerCarousels = self::getFooterCarousel('migration');
        $projects = Project::whereIn('id', [11,15,17])->get();
        return view('frontend.migration', compact('footerCarousels', 'projects'));
    }

    public function contact()
    {
        $footerCarousels = self::getFooterCarousel('migration');
        return view('frontend.contact', compact('footerCarousels'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactStore(Request $request)
    {
        $input = $request->all();
        
        // Send Mail
        $mailData['input']=(object)$input;
        Mail::send('emails.contact', $mailData, function ($message) use ($input,$request){
            $message->to('frank.law@homestates.com.au')->subject('Contact Form');
        });

        $message = 'Thank You';
        $caption = 'Your contact applcation has been sent.';
        return view('frontend.message', compact('message', 'caption'));
    }


    public function pressMarket()
    {
        $press = true;
        $markets = Market::get();
        return view('frontend.press.market', compact( 'markets'));
    }
    public function pressMag()
    {
        $press = true;
        $mags = Mag::orderBy('created_at', 'desc')->get();
        return view('frontend.press.mag', compact( 'mags'));
    }
    public function pressRoom()
    {
        $press = true;
        return view('frontend.press.main', compact('press'));
    }
    public function pressNews()
    {
        $press = true;
        $news = News::get();
        return view('frontend.press.news', compact('news'));
    }
    public function pressResearch()
    {
        $press = true;
        $articles = Research::paginate(5);
        return view('frontend.press.research', compact('press', 'articles'));
    }
    public function pressVideo()
    {
        $press = true;
        $projects = Project::paginate(9);
        return view('frontend.press.video', compact('press', 'projects'));
    }
    public function pressEvent()
    {
        $press = true;
        $events = Event::get();
        return view('frontend.press.event', compact('press', 'events'));
    }
    public function pressEventShow($eventId)
    {
        $press = true;
        $event = Event::find($eventId);
        return view('frontend.press.eventShow', compact('press', 'event'));
    }
    public function pressPromo()
    {
        $press = true;
        return view('frontend.press.promo', compact('press'));
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

    public function submitEnquiry(Request $request)
    {
        $input = $request->all();
        
        // Send Mail
        $mailData['input']=(object)$input;
        Mail::send('emails.enquiry', $mailData, function ($message) use ($input,$request){
            $message->to('frank.law@homestates.com.au')->subject('Homestate Enquiry');
        });
        
        $message = 'Thank You';
        $caption = 'Your enquiry has been sent.';
        return view('frontend.message', compact('message', 'caption'));
    }

    public function newsletterSignup(Request $request)
    {
        $input = $request->all();
        
        // Send Mail
        $mailData['input']=(object)$input;
        Mail::send('emails.newsletter', $mailData, function ($message) use ($input,$request){
            $message->to('frank.law@homestates.com.au')->subject('Homestate Newsletter Sign up');
        });
        
        $message = 'Thank You';
        $caption = 'You\'ve successfully signed up.';
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
