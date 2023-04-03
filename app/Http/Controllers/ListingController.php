<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Get all listings.
    public function index() {
        // dd($request);        // need parameter Request $request
        // Can also use the request() helper function.
        // dd(request()->tag);
        // dd(request('tag'));

        return view('listings/index', [                          // Can also use "listings.index", see next method in class.
            "listings" => Listing::latest()->filter(request(['tag', 'search']))->get()              // Sorted, filter using scopeFilter in Listing Model.
        ]);
    }

    // Show a single listing.
    public function show(Listing $listing) {
        return view("listings.show", [
            "listing" => $listing
        ]);
    }
}
