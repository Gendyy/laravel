<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return view('user.userhome', compact('users'));


    }

    public function edit(Request $request) {

        $user_id = $request-> user;
        $user = User::findOrFail($user_id);

        return view('user.management.edit', compact('user'));


    }


    Public function update(Request $request) {

        $user_id = $request-> user;
        $user = User::findOrFail($user_id);

        $user->firstname = $request-> firstname;
        $user->lastname = $request-> lastname;
        $user->email = $request-> email;
        $user->phonenumber = $request-> phonenumber;
        $user->gender = $request-> gender;
        $user->birth_date = $request-> birth_date;

        $user->save();

        return redirect('user/home');

    }


    public function uploadImage(Request $request) {

        if ($request->hasFile('image')) {

            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            
            auth()->user()->update(['image' => $filename]);


        }

        return redirect()->back();

    }
}
