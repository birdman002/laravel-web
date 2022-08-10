<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Get and show all listings
    public function index(Request $request)
    {
        $tag = $request->tag;
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(5)
        ]);
    }

    // Show single listing
    public function show(Listing $listing) 
    {
        return view('listings.show', [
            'heading' => 'Listing',
            'listing' => $listing
        ]);
    }

    // Show Create Listing
    public function create(){
        return view('listings.create');
    }

    // Store Listing Data 
    public function store(Request $request){
    //dd($request->file('logo'));
        $formFields = $request->validate(
            [
                'title'=>'required',
                'company' => 'required',
                'tags' => 'nullable',
                'description'=> 'required',
                'email' => 'required',
                'location' => 'required'     ,
                'website' => 'required'           

            ]
        );

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully!');
    }
}
