<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Contact;


class ContactUsController extends Controller
{
    public function create() {

        $users = User::all();

        return view('user.contact', compact('users'));

    }

    public function store(Request $request) {

        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'msg_type' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',

        ]);

        $contact = new Contact; // createing a new object

        // matching the request
        $contact->firstname = $request-> firstname;
        $contact->lastname = $request-> lastname;
        $contact->email = $request-> email;
        $contact->msg_type = $request-> msg_type;
        $contact->message = $request-> message;

        //saving the process
        $contact->save();


        return redirect('user/home')->with("success","We Recived Your Message, Thanks For Contacting Us");


    }
}
