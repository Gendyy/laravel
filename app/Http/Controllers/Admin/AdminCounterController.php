<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminCounterController extends Controller
{
    public function index()
    {

        $adminsData = Admin::all()->count();
        return view('admin.layouts.adminHome', compact('adminsData'));

    }
}
