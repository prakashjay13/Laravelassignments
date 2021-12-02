<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
use App\Http\Middleware\Session;
Route::middleware([Session::class])->group(function(){
    Route::get('/checksession',function(){
        return "Session called";
        
        });
        Route::get('/logout', function () {
            session()->forget("sid");
            return redirect('/login');
            
            
        
        Route::get('/category',[main::class,"category"]);
        Route::get('/order',[main::class,"order"]);
        Route::get('/product',[main::class,"product"]);
        Route::get('/changepass',[main::class,"changepass"]);
        Route::get("/dashboard",[main::class,"dashboard"]);   
    });
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[main::class,"register"]);
Route::post('/sendposts',[main::class,"sendposts"]);


Route::get('/login',[main::class,"login"]);
Route::post('/view',[main::class,"view"]);

Route::get('/changepass',[main::class,"cpass"]);
Route::post('/chpass',[main::class,"store"]);

Route::get('/editdetails',[main::class,"edit"]);
Route::post('/editd',[main::class,"update"]);