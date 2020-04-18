<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserMangeController extends Controller
{
    public function index() {

        $users = User::all(); // get all the users data

        return view('admin.pages.usermanagement.index', compact('users')); // fetch the data and injecting it into a view

    }

    public function create() {

        return view('admin.pages.usermanagement.create');

    }

    public function store(Request $request) {

        // dd('hello from store');

        $user = new User; // createing a new object

        // matching the request
        $user->firstname = $request-> firstname;
        $user->lastname = $request-> lastname;
        $user->email = $request-> email;
        $user->phonenumber = $request-> phonenumber;
        $user->gender = $request-> gender;
        $user->password = $request-> password;
        $user->birth_date = $request-> birth_date;
        
        
        //saving the process
        $user->save();

        return redirect('admin/users');

    }


    public function show(Request $request) {

        $user_id = $request-> user;
        $user = User::findOrFail($user_id);
        return view('admin.pages.usermanagement.show', compact('user'));


    }


    public function edit(Request $request) {

        $user_id = $request-> user;
        $user = User::findOrFail($user_id);

        return view('admin.pages.usermanagement.edit', compact('user'));


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

        return redirect('admin/users');

    }

    public function destroy(Request $request) {

        $user_id = $request-> user;
        $user = User::findOrFail($user_id);
        $user->delete();
        $users = User::all();
        return redirect()->back();
        return view('admin.pages.usermanagement.index', compact('users'));
        
    }

    public function updateStatus(Request $request) {

        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json();
    }
}
