<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
return view('app.home');
})->name("Index");

Route::get('/about',function(){
return view('app.about');
})->name("About");

Route::get('/pricing',function(){
return view('app.pricing');
})->name("Pricing");

Route::get('/services',function(){
return view('app.services');
})->name("Services");


Route::get('/contact',function(){
return view('app.contact');
})->name("Contact");


