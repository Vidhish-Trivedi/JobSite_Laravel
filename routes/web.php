<?php

use App\Http\Controllers\ListingController;
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
Route::get('/',[ListingController::class, 'index']);        // Instead of callback, pass array containing Controller class and method name.

// Single Listing.
// Route Model Binding.     (Errors like 404 not found are built-in)
Route::get("/listings/{listing}", [ListingController::class, 'show']);

// Common Resource Routes:
// index - Show all resources.
// show - Show a single resource.
// create - Show form to create a new resource.
// store - Store new resource.
// edit - Show form to edit resource.
// update - Update resource.
// destroy - Delete resource.
