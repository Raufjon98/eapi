<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResources([
    'products' => ProductController::class,
]);

Route::group(['prefix'=>'products'], function(){
    Route::apiResources([
        '/{product}/reviews' => ReviewController::class,
    ]);
});