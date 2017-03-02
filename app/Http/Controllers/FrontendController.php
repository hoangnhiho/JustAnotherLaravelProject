<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Employee;
use App\Models\FooterCarousel;

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
