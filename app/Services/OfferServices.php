<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Offer;
use Auth;

class OfferServices
{
    // public function agency($request)
    // {

    //     if (Auth::guard('agency')) {
    //         $request->agency_id = Auth::guard('agency')->user()->id;

    //     }
    
    // }

    public function store(Request $request) 
    {

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


    }

    
}


