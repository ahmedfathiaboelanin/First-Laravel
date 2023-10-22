<?php

use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Http;


// Main
Route::get('/', function () {
    return view('index');
});

//Products Routes
Route::get('/products', [ProductsController::class,'index']);
Route::get('/product/{id}',[ProductsController::class,'showSingleProduct']);

// Login and Logout
Route::get('/account', function () {
    return view('account');
});

// About Route
Route::get('/about', function () {
    return view('about');
});

// Contact Route
Route::get('/contact', function () {
    return view('contact');
});

// Cart Route
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/test',function (){
    $response = Http::get('http://localhost:8000/api/skills');
    return "<pre>".$response."</pre>";

});

