<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [                               // can pass an array of data.
        "heading" => "Latest Listings",
        "listings" => [
            [
                "id" => 1,
                "title" => "Listing One",
                "description" => "This is the description for Listing One",
            ],
            [
                "id" => 2,
                "title" => "Listing Two",
                "description" => "This is the description for Listing Two",
            ],
            [
                "id" => 3,
                "title" => "Listing Three",
                "description" => "This is the description for Listing Three",
            ]
        ]
    ]);
});
