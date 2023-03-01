<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Listing;
use GuzzleHttp\Psr7\Response;

/*
|-----------0---------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);

// create listing
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

// store Listing data
Route::post('/listings', [ListingController::class, 'store']);

// show edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


Route::get('/listing/{listing}/{logo}', function($logo){

    // $file = public_path()."/storage/{{$logo}}";

    // $headers = array(
    //     'Content-Type : application/png ',
    // );
        return 'hidid';
    // return response()->download($file, 'logo.png', $headers);
});
// edit Submit to update

Route::put('/listing/{listing}', [ListingController::class, 'update']);
// ->middleware('auth');


// delete Listing
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Single Listing
Route::get('/listing/{listing}',[ListingController::class, 'show']);

// show register/Create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

##### UserController #####

// create new user 

Route::post('/users', [UserController::class, 'store']);


// logout user

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show user login page 

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// go to http/authenticate to check for the name to redirect guest
// change home to / in the RouteServiceProvider

Route::post('/users/authenticate', [UserController::class, 'authenticate']);



// download logo

// Route::get('/download', function(){
//     $file = public_path()."/storage/logos/kOOzRmMv2sVYUngStks3DiPgwjax9IejW5iZZDUl.png";
    
//     $headers = array(
//         'Content-Type : application/png ',
//     );

//     return response()->download($file, 'logo_laravel.png', $headers);
// });














// Route::get('/listing/{id}', function($id){

//     $listing =  Listing::find($id);
//     if($listing){

//         return view('listing', [
//             'listing'=> $listing
//         ]);
//     }else{
//         abort('404');
//     }
// });

#single listing

// Route::get('/listing/{listing}', function(Listing $listing){

//     return view('listing', [
//         'listing'=> $listing
//     ]);
// });

#single listing




// <?php
// namespace App\Models;

