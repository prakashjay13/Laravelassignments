<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
use App\Http\Controllers\Ecom;
use App\Http\Middleware\Session;
Route::middleware([Session::class])->group(function(){
    Route::get('/checksession',function(){
        return "Session called";
        
        });
        Route::get('/logout', function () {
            session()->forget("sid");
            return redirect('/login');
            
            
        
       
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


Route::get('/category',[main::class,"category"]);
Route::get('/addcategory',[main::class,"addcategory"]);
Route::post('/postaddcategory',[main::class,"postaddcategory"]);

Route::delete("/deletecategory",[main::class,'delcategory']);
Route::get("/editcategory/{id}",[main::class,"editcategory"]);
Route::post("/updatecategory",[main::class,"updatecategory"]);


Route::get('/product',[main::class,"product"]);
Route::get('/addproduct',[main::class,"addproduct"]);
Route::post('/postaddproduct',[main::class,"postaddproduct"]);

Route::delete("/deleteproduct",[main::class,'delproduct']);
Route::get("/editproduct/{cid}",[main::class,"editproduct"]);
Route::post("/updateproduct",[main::class,"updateproduct"]);

Route::get('/order',[main::class,"order"]);




//for front end routes

Route::get('/home',[Ecom::class,"default"]);

Route::get('/error',[Ecom::class,"error"]);

Route::get('/blogsingle',[Ecom::class,"blogsingle"]);

Route::get('/blog',[Ecom::class,"blog"]);

Route::get('/cart',[Ecom::class,"cart"]);

Route::get('/checkout',[Ecom::class,"checkout"]);

Route::get('/contactus',[Ecom::class,"contactus"]);

Route::get('/ulogin',[Ecom::class,"ulogin"]);

Route::get('/productdetails',[Ecom::class,"productdetails"]);

Route::get('/shop',[Ecom::class,"shop"]);