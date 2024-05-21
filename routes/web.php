<?php

use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
use App\Mail\BasicEmail;
use GuzzleHttp\Cookie\FileCookieJar;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', [WelcomeController::class, 'welcome']);

Route::get('/notes/csrftoken', [NoteController::class, 'csrftoken']);

Route::resource('/notes', NoteController::class);

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');
Route::get('home/{user}',  [RegisterController::class, 'show'])->name('home');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login/store', [LoginController::class, 'store'])->name('login.store');

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
});



Route::get("photo", [FileController::class, "index"])->name("photo");
Route::post("photo/upload", [FileController::class, "upload"])->name("photo.upload");

// config smtp email
// make email
// Mail::to

Route::get('/mail', function () {
    Mail::to("capito9762@haislot.com")->send(new BasicEmail('Mahmoud'));
    return "Email was sent";
});

Route::get('/contact', [ContactusController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactusController::class, 'store'])->name('contact.send');
