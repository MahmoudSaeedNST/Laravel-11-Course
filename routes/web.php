<?php

use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use App\Mail\BasicEmail;
use GuzzleHttp\Cookie\FileCookieJar;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index']);
Route::get('/welcome', [WelcomeController::class,'welcome']);

Route::get('/notes/csrftoken', [NoteController::class,'csrftoken']);

Route::resource('/notes', NoteController::class);


// get post put delete 
Route::get('/home', function(){
    return "this is home page";

});

Route::get("photo", [FileController::class,"index"])->name("photo");
Route::post("photo/upload", [FileController::class,"upload"])->name("photo.upload");

// config smtp email
// make email
// Mail::to

Route::get('/mail', function(){
    Mail::to("capito9762@haislot.com")->send(new BasicEmail('Mahmoud'));
    return "Email was sent";
});

Route::get('/contact', [ContactusController::class,'index'])->name('contact');
Route::post('/contact/send', [ContactusController::class,'store'])->name('contact.send');
