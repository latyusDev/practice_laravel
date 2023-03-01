<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\Return_;

class ListingController extends Controller
{
    //show all listing
    public function index(){
        
        // pagination command to change the styling php artisan vendor:publish
        return view('listings.index', ['Listings' => Listing::latest()->filter(request(['tag', 'search']))
        ->paginate(6)]);
        // return view('listings.index', ['Listings' =>Listing::all()]);
    }
    
    // show single listing
    
    public function show(Listing $listing){
        
        return view('listings.show', ['listing' => $listing]);

    }

    // show Create Form
    public function create(){
        return view('listings.create');
    }

     // store Listing data
     public function store(Request $request){
        
        //  dd($request->file('logo'))->store();
      $formField = $request->validate([
        'title' => 'required',
        'company' => ['required', Rule::unique('listings', 'company')],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required',
    ]);

    if($request->hasFile('logo')){
        // command to access file link : php artisan storage:link
        $formField['logo'] = $request->file('logo')->store('logos', 'public');
    }

      Listing::create($formField);
    
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // show edit form
    public function edit(Listing $listing){
        // dd($)
        return view('listings.edit', ['listing' => $listing]);
    }

    // update

    public function update(Request $request, Listing $listing){
        
        //  dd($request->file('logo'))->store();
      $formField = $request->validate([
        'title' => 'required',
        'company' => 'required',
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required',
    ]);



    
    if($request->hasFile('logo')){
        // command to access file link : php artisan storage:link
        $formField['logo'] = $request->file('logo')->store('logos', 'public');
    }
      $listing->update($formField);
       
        return back()->with('message', 'Listing updated successfully!');
    }

    // delete Listing
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');

    }
}

// create-Show form to create listing