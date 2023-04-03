<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All Listings.
Route::get('/', function () {
    return view('listings', [                               // can pass an array of data.
        "heading" => "Latest Listings",
        "listings" => Listing::all()                        // Call to static method of model Listing.
    ]);
});

// Single Listing.
// Route::get("/listings/{id}", function ($id) {
//     $listing = Listing::find($id);

//     if($listing){
//         return view("listing", [
//             "listing" => $listing
//         ]);
//     }
//     else{
//         abort(404, "Listing not found");
//     }
// });

// Route Model Binding.     (Errors like 404 not found are built-in)
Route::get("/listings/{listing}", function (Listing $listing) {
    return view("listing", [
        "listing" => $listing
    ]);
});
