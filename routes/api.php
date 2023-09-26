<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('/products', 'ProductController');

Route::group(['prefix'=>'products'], function(){
    Route::apiResource('/{product}/reviews', 'ReviewController');
});