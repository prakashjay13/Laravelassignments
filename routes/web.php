<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pizza;


Route::get('/', function () {
    return view('master');
});

Route::get("/dashboard",[Pizza::class,"dashboard"]);
Route::get("/menu",[Pizza::class,"menu"]);


Route::get("/register",[Pizza::class,"register"]);
Route::post('/usersignup',[Pizza::class,"usersignup"]);



Route::get("/login",[Pizza::class,"login"]);