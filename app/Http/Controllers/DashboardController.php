<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('auth.dashboard');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
