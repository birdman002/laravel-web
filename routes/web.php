<?php

use App\Http\Controllers\CommentsController;
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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Common Resource Bindings
// index = show all listings
// show - show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

// Show all Order Comments
Route::get('/comments', [CommentsController::class, 'index']);

// All Listings
// Route::get('/', [ListingController::class, 'index']);
// Test Headers
Route::get('/hello', function()
{
   return response('<h1>Hello World</h1>', 200)
       ->header('Content-Type', 'text/plain')
       ->header('foo', 'bar');
});

// Show Create Listing
//Route::get('/listing/create', [ListingController::class, 'create']);

// Store Listing 
//Route::post('/listings', [ListingController::class, 'store']);

// Single Listing keep this at the bottom
//Route::get('/listing/{listing}', [ListingController::class, 'show']);


