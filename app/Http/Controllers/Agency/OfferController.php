<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Offer;
use App\Models\Agency;
use App\Services\OfferServices;

use Auth;




class OfferController extends Controller

{

   
    public $offer;


    public function __construct()
    {
        $this->offer = new OfferServices();

    }

    public function index() {

        // $agency  = Agency::all();
        $offers  = Offer::with('photos')->get();
        $offers = Auth::guard('agency')->user()->offers;


        return view('agency.pages.offer.index', compact('offers'));
        

    }


    public function create() {

        $offers  = Offer::with('details')->get();
        $offers  = Offer::with('photos')->get();

        return view('agency.pages.offer.create', compact('offers'));

    }



    public function store(Request $request, OfferServices $offerServices) {

        $this->offer->store($request);
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

        
        $this->offer->update($request);
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

