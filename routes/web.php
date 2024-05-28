<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.home');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about.about');
})->name('about');
Route::get('/service', function () {
    return view('frontend.service.service');
})->name('service');
Route::get('/contact', function () {
    return view('frontend.contact.contact');
})->name('contact');
Route::get('/quote', function () {
    return view('frontend.quote.quote');
})->name('quote');