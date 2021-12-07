<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pizza;
use App\Http\Controllers\Operation;


Route::get('/', function () {
    return view('welcome');
});




Route::get("/register",[Pizza::class,"register"]);
Route::post('/usersignup',[Pizza::class,"usersignup"]);



Route::get("/login",[Pizza::class,"login"]);
Route::post('/userlogin',[Pizza::class,"userlogin"]);

Route::get('layout/logout',[Pizza::class,'logout'])->name('Logout');
Route::get('layout/dasboard', [Operation::class, 'index'])->name('DashBoard');
    Route::get('layout/myorder', [Operation::class, 'myOrder'])->name('MyOrder');
    Route::get('layout/myprofile', [User::class, 'myProfile'])->name('MyProfile');
    Route::get('cart', [Operation::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [Operation::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [Operation::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [Operation::class, 'remove'])->name('remove.from.cart');
    Route::get('cart/checkout/{total}', [Operation::class, 'checkOut']);
    Route::post('cart/checkout/postorder',[Operation::class,'PostOrder'])->name('PostOrder');
