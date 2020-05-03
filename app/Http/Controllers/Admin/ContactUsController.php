<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactUsController extends Controller
{
    public function index() {


        $contacts = Contact::all();

        return view('admin.pages.contacts.contact', compact('contacts'));

    }


    public function show(Request $request) {

        $contact_id = $request-> contact;
        $contact = Contact::findOrFail($contact_id);
        return view('admin.pages.contacts.contact_details', compact('contact'));
        
    }

    public function updateStatus(Request $request) {

        $contact = Contact::findOrFail($request->contact_id);
        $contact->status = $request->status;
        $contact->save();

        return response()->json();
    }
}
