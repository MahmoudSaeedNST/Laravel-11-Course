<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    //
    function index(){
        return view("contactus");
    }
    function store(Request $request){
        $name = $request->name;
        $subject = $request->subject;
        $email = $request->email;
        $msg = $request->msg;

        Mail::send('email.contact', compact('name', 'subject','email','msg'), function($message) use ($email, $subject) {
            $message->to($email);
            $message->subject($subject);
        });
        return back()->with('success', 'Thank you for contacting us!');
    }
}
