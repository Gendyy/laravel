<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserCounterController extends Controller
{
    public function index()
    {

        $usersData = User::all()->count();
        return view('user.userHome', compact('usersData'));

    }
}
