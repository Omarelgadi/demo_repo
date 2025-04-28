<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home' , function(){
   
//     return view('home');
// });
// Route::get('/loop',function(){
//     $cartypes = ['marcedes','BMW','Audi'];
//     return view('loop',compact('cartypes'));
// });
Route::get('/category',function(){
    $cat = Category::all();
    return $cat;
});