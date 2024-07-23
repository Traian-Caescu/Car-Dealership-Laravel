<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

//routes for the items
//middleware, used to prevent non-logged in users to access the pages
// all listings
Route::get('/', function () {
    return view('listings.index', [
    'heading' => 'Latest Listings',
    'listings' => Listing::all()
    ]);
});

//Create table to list the cars on the website
Route::get('/listings/create', function(){
	return view('listings.create');
});

//store listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//edit the cars list and their information
Route::get('/listings/{listing}/edit', 
[ListingController::class, 'edit'])->middleware('auth');


//update the changes, only signed in users can do so
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');


//delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//single listing, when a car is clicked a new page is opened using the id
Route::get('/listings/{listing}', function(Listing $listing) {
		return view('listings.show', ['listing' => $listing]);
});


//register, everyone on the website has access to the page
Route::get('/register', [UserController::class, 'create']);


//user register, 

Route::post('/users', [UserController::class, 'store']);



//logout, user must be logged in, middleware used
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


//login
Route::get('/login', [UserController::class, 'login'])->name('login');


//user log in confirmation
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
