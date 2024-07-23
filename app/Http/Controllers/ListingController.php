<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
	
	
	//create store
	public function store(Request $request) {
		$formFields =$request->validate([
		'title' => 'required',
		'company' => 'required',
		'location' => 'required',
		'tags' => 'required',
		'description' => 'required'
		]);
		//check if image was uploaded
		
		Listing::create($formFields);
		return redirect('/');
	}
	
	public function edit(Listing $listing) {
		
		return view('listings.edit', ['listing' => $listing]);
	}
	
	//update
	public function update(Request $request, Listing $listing) {
		$formFields =$request->validate([
		'title' => 'required',
		'company' => 'required',
		'location' => 'required',
		'tags' => 'required',
		'description' => 'required'
		]);
		//check if image was uploaded
		
		$listing->update($formFields);
		return back();
	}
	
	
	//delete/ destroy method
	public function destroy(Listing $listing){
		$listing -> delete();
		return redirect('/');
		
	}
}
