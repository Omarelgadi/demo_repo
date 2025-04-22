<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function(){
    $myname ="Omar";
    $mylastname ="Elgadi";
    return view('home',compact('myname','mylastname'));
});
Route::get('/loop',function(){
    $cartypes = ['marcedes','BMW','Audi'];
    return view('loop',compact('cartypes'));
});