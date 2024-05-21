<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   // create
   public function create(){
     return view('auth.login');
   }
   //store
   public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // credentials
        $credentials = $request->only(['email', 'password']);

        // if attempt true make auth
        if(auth()->attempt($credentials)){
            // redirect to dashbaord page
            return redirect()->route('dashboard');
        }else {
            // redirect to login page with error message
            return redirect()->route('login')->with('error', 'Invalid login credentials, please try again');
        }
   }






}
