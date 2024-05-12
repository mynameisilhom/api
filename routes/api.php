<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use L5Swagger\Http\Controllers\SwaggerController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->middleware('throttle:api')->group(function () {
    Route::post('register', [AuthController::class,'register']);
    Route::post('login', [AuthController::class,'login']);
});

Route::prefix('v1')->middleware(['auth:sanctum','throttle:api'])->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('posts', PostController::class);
    Route::get('logout', [AuthController::class,'logout']);
});


//Route::get('v1/documentation', [SwaggerController::class, 'api'])->name('l5-swagger.api');

