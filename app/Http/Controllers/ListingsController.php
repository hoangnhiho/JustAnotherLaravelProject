<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $search = '';
        // if (isset($input['search'])) $search = $input['search'];

        $listings = Listing::paginate(5);
        // echo json_encode($listings);
        // return json_encode($listings);


        // Adding in other parameters into prev_url and next_url
        // if (isset($input['search'])) $buckets->appends(['search' => $input['search']])->links();
        return view('frontend.listingsIndex', compact('listings'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($listingId)
    {
        $listing = Listing::find($listingId);
        return view('frontend.listingsShow', compact('listing'));
    }

}
