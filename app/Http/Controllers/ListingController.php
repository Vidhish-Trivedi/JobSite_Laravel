<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Get all listings.
    public function index() {
        return view('listings/index', [                          // can pass also use "listings.index", see next method in class.
            "listings" => Listing::all()
        ]);
    }

    // Show a single listing.
    public function show(Listing $listing) {
        return view("listings.show", [
            "listing" => $listing
        ]);
    }
}
