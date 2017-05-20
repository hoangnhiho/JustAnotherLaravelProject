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
    public function index(Request $request)
    {
        $input = $request->all();
        $search = '';
        if (isset($input['search'])) $search = $input['search'];        
        $bed = 0;
        if (isset($input['bed'])) $bed = $input['bed'];     
        $bath = 0;
        if (isset($input['bath'])) $bath = $input['bath'];     
        $minPrice = 0;
        if (isset($input['min_price'])) $minPrice = $input['min_price'];     
        $maxPrice = 5000000;
        if (isset($input['max_price'])) $maxPrice = $input['max_price'];     
        // $propType = 'all';
        if (isset($input['prop_type'])) $propType = $input['prop_type'];  

        $orderType = 'asc';
        if (isset($input['order_type'])) $orderType = $input['order_type'];  

        if (isset($propType)){
            if ($propType == 'all'){
                $listings = Listing::where('address', 'like', '%'.$search.'%')->where('bed_no', '>=', $bed)->where('bath_no', '>=', $bath)->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice)->orderBy('price', $orderType)->paginate(5);
            }else{
                $listings = Listing::where('address', 'like', '%'.$search.'%')
                ->where('bed_no', '>=', $bed)
                ->where('bath_no', '>=', $bath)
                ->where('price', '>=', $minPrice)
                ->where('price', '<=', $maxPrice)
                ->where('prop_type', $propType)
                ->orderBy('price', $orderType)->paginate(5);
            }
        }else{
            $listings = Listing::orderBy('price', $orderType)->paginate(5);
        }

        // Adding in other parameters into prev_url and next_url
        if (isset($input['search'])) $listings->appends(['search' => $input['search']])->links();
        if (isset($input['bed'])) $listings->appends(['bed' => $input['bed']])->links();
        if (isset($input['bath'])) $listings->appends(['bath' => $input['bath']])->links();
        if (isset($input['min_price'])) $listings->appends(['min_price' => $input['min_price']])->links();
        if (isset($input['max_price'])) $listings->appends(['max_price' => $input['max_price']])->links();
        if (isset($input['prop_type'])) $listings->appends(['prop_type' => $input['prop_type']])->links();
        if (isset($input['order_type'])) $listings->appends(['order_type' => $input['order_type']])->links();

        $params = (object) $input;
        if (!isset($params->prop_type)) $params->prop_type = 'all';
        if (!isset($params->bed)) $params->bed = '';
        if (!isset($params->bath)) $params->bath = '';
        if (!isset($params->min_price)) $params->min_price = '';
        if (!isset($params->max_price)) $params->max_price = '';
        if (!isset($params->order_type)) $params->order_type = '';
        return view('frontend.listingsIndex', compact('listings', 'params'));
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
