<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    //
    function list(Request $req)
    {
        $req->validate([
            'images.*'=> 'required|mimes:jpg,png,jpeg|max:5048',
            'name' => 'required'
        ]); 
        $i= 0;
        if($req->hasfile('images')){
            foreach($req->file('images') as $file){
                $i++;
                $newImageName = time() . '-'.  $req->name  . $i . '.' . $file->extension();
                $file -> move(public_path('images'), $newImageName);
                $imgData[] = $newImageName;
            }
        }

        $listing = new Listing;
        $listing->name=$req->name;
        $listing->category=$req->category;
        $listing->type=$req->type;
        $listing->price=$req->price;
        $listing->address=$req->address;
        $listing->description=$req->description;
        $listing->images=json_encode($imgData);
        $listing->condition=$req->condition;
        $listing->bedrooms=$req->bedrooms;
        $listing->bathrooms=$req->bathrooms;
        $listing->floor=$req->floor;
        $listing->insidesize=$req->insidesize;
        $listing->outsidesize=$req->outsidesize;
        $listing->additionalinfo=$req->additionalinfo;
        $listing->expences=$req->expences;
        $listing->save();
        return redirect('/');
    }
}
