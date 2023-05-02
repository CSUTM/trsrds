<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        return view('listings', [
            'heading' => 'Latest Listing',
            'listings' => Listing::all()
        ]);
    }

    public function show($id) {
        return view('listing', [
            'listing' => Listing::find($id)
        ]);
    }
}
