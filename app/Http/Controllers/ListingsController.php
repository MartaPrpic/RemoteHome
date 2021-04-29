<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Favourite;
use Illuminate\Support\Facades\DB;
use Session;
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
    function show()
    {
        $data = Listing::all();
        return view('accommodation', ['listings'=> $data]);
    }

    function detail($id){
        $data = Listing::find($id);
        return view('detail', ['listing'=>$data]);
    }

    function favourite(Request $req)
    {
        if($req->session()->has('user'))
        {
            $favourite = new Favourite;
            $favourite->user_id=$req->session()->get('user')['id'];
            $favourite->listing_id=$req->listing_id;
            $favourite->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    function favouriteList()
    {
        $user_id = Session::get('user')['id'];
        $favouriteListings = DB::table('favourites')
            ->join('listings', 'favourites.listing_id', '=', 'listings.id')
            ->where('favourites.user_id', $user_id)
            ->select('listings.*')
            ->get();

            return view('favourites', ['favourites' => $favouriteListings]);
    }
}
