<?php

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/data",function(){
    return response()->json(Products::all()->where('id',">",7));
});
Route::post("/data",function(Request $request){
    $data = $request->all();
    Products::create($data);
    return response()->json(Products::all()->where('id','=',10));
});