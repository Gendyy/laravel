<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {

        $loginData = $request->validate([
            'email'   => 'required|email',
            'password' => 'required|min:6'
          ]);
    
          // Attempt to log the user in
          if (!Auth::guard('admin')->attempt($loginData)) {
            return response(['message' => 'Invalid Cardentials']);
          }
  
          $token = Auth::guard('admin')->user()->createToken('authToken')->accessToken;

          return response(['user' => Auth::guard('admin')->user(), 'access_token' => $token]);
        }
    
}

