<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Offer;
use App\Models\Agency;

use Auth;

class OfferController extends Controller
{
    public function index() {

        // $agency  = Agency::all();
        $offers = Auth::guard('agency')->user()->offers;
        $offers  = Offer::with('photos')->get();

        return view('agency.pages.offer.index', compact('offers'));
        

    }


    public function create() {

        $offers  = Offer::with('details')->get();
        $offers  = Offer::with('photos')->get();

        return view('agency.pages.offer.create', compact('offers'));

    }



    public function store(Request $request) {

        // dd('hello from store');

        $offer = new Offer; // createing a new object

        // matching the request
        $offer->name = $request-> name;
        $offer->start_date = $request-> start_date;
        $offer->end_date = $request-> end_date;
        $offer->rooms_num = $request-> rooms_num;
        $offer->agency_price = $request-> agency_price;
        $offer->user_price = $request-> user_price;
        $offer->agency_id = Auth::guard('agency')->user()->id;

        //saving the process
        $offer->save();
        
        $offer->categories()->sync($request['category_id']);

        $offer->details()->create([
            
            'from' => $request-> from,
            'to' => $request-> to,
            'dep_time' => $request-> dep_time,
            'arr_time' => $request-> arr_time,
            'trip_num' => $request-> trip_num,
            'transportation' => $request-> transportation,
            
            ]);

            // send the photo data to database
        $offer->photos()->create([

            'photo' => $request-> photo,

        ]);
        
        // Create the photo at its Dir
        if ($request->hasFile('photo')) {

            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images/photo', $filename);
            
            $offer->update(['photo' => $filename]);
            
        }// Photo dont display at the view


        $offer->save();

        return redirect('agency/offers');

    }



    public function edit(Request $request) {

        $offers  = Offer::with('details')->get();
        $offers  = Offer::with('photos')->get();
        $offer_id = $request-> offer;
        $offer = Offer::findOrFail($offer_id);

        return view('agency.pages.offer.edit', compact('offer', 'offers'));


    }



    Public function update(Request $request) {

        $offer_id = $request-> offer;
        $offer = Offer::findOrFail($offer_id);

        $offer->name = $request-> name;
        $offer->start_date = $request-> start_date;
        $offer->end_date = $request-> end_date;
        $offer->rooms_num = $request-> rooms_num;
        $offer->agency_price = $request-> agency_price;
        $offer->user_price = $request-> user_price;

        $offer->save();

        $offer->details()->update([
            
            'from' => $request-> from,
            'to' => $request-> to,
            'dep_time' => $request-> dep_time,
            'arr_time' => $request-> arr_time,
            'trip_num' => $request-> trip_num,
            'transportation' => $request-> transportation,
            
            ]);
            
        $offer->save();
        
        $offer->photos()->update([

            'photo' => $request-> photo,

        ]);

        if ($request->hasFile('photo')) {

            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images/photo', $filename);
            
            $offer->update(['photo' => $filename]);
            
        }// Photo dont display at the view


        $offer->save();

        return redirect('agency/offers');

    }


    public function destroy(Request $request) {

        $offer_id = $request-> offer;
        $offer = Offer::findOrFail($offer_id);
        $offer->details()->delete();
        $offer->delete();
        $offers = Offer::all();
        return redirect()->back();
        return view('agency.pages.offer.index', compact('offers'));
        
    }


    // public function uploadImage(Request $request) {

        

    // }

}

