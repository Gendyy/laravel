<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use Auth;
Use Hash;

class AgencyController extends Controller
{
    public function index() {


        $agencies = Agency::all();

        return view('admin.pages.agency.index', compact('agencies'));


    }


    public function create() {

        return view('admin.pages.agency.create');

    }

    public function store(Request $request) {

  

        $agency = new Agency; // createing a new object

        // matching the request
        $agency->name = $request-> name;
        $agency->email = $request-> email;
        $agency->phonenumber = $request-> phonenumber;
        $agency->address = $request-> address;
        $agency->password = Hash::make($request-> password);
        $agency->photo = $request-> photo;
        $agency->country = $request-> country;
        
        //saving the process
        $agency->save();

        return redirect('admin/agencies');

    }


    public function show(Request $request) {

        $agency_id = $request-> agency;
        $agency = Agency::findOrFail($agency_id);
        return view('admin.pages.agency.show', compact('agency'));


    }


    public function edit(Request $request) {

        $agency_id = $request-> agency;
        $agency = Agency::findOrFail($agency_id);

        return view('admin.pages.agency.edit', compact('agency'));


    }



    Public function update(Request $request) {

        $agency_id = $request-> agency;
        $agency = Agency::findOrFail($agency_id);

        $agency->name = $request-> name;
        $agency->email = $request-> email;
        $agency->phonenumber = $request-> phonenumber;
        $agency->address = $request-> address;
        $agency->photo = $request-> photo;
        $agency->country = $request-> country;

        $agency->save();

        return redirect('admin/agencies');

    }

    public function destroy(Request $request) {

        $agency_id = $request-> agency;
        $agency = Agency::findOrFail($agency_id);
        $agency->delete();
        $agencies = Agency::all();
        return redirect()->back();
        return view('admin.pages.agency.index', compact('agencies'));
        
    }


    public function uploadImage(Request $request) {

        if ($request->hasFile('photo')) {

            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $filename, 'public');
            
            Auth::gurad('agency')->update(['photo' => $filename]);

        }

    }
}
