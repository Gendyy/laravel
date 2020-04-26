<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Auth;

class AgencyLoginController extends Controller
{

    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::AGENCYHOME;


    public function __construct()
    {
      $this->middleware('guest:agency')->except('logout');
    }

    public function showLoginForm()
    {
      return view('auth.agencyLogin');
    }

    public function login(Request $request)
    {
      // Validate the form data
      // dd($request);
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      
      // Attempt to log the user in
      if (Auth::guard('agency')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
      
        Auth::guard('agency')->logout();
        return redirect()->to('agency/login');


    }
}
