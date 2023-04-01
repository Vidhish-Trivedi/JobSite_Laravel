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
    return view('welcome');
});

Route::get("hello", function () {
    return response("<h1>Hello World</h1>", 200)        // Default status is 200.
    ->header("Content-Type", "text/plain")
    ->header("foo", "bar");                         // Can pass custom headers also.
});

// PathVariables.
Route::get("/posts/{postId}", function ($postId) {
    // Helper methods for debugging.
    // dd($postId);            // die and dump.
    // ddd($postId);                  // die, dump, and debug. 
    return response("Post " . $postId);
})->where("postId", "[0-9]");                 // Put constraint on pathVariable, inclusive range.

// Request and Query Params.
// http://localhost:8000/search?name=John&age=25&city=Manchester            : Try this with dd($request).
Route::get("/search", function (Request $request) {
    // dd($request);
    return response($request->name . " is of age " . $request->age . " and lives in " . $request->city);
});

