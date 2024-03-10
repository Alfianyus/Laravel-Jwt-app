<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\AuthController;
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
// */
// Route::prefix('customers')->group(function(){
//     Route::post('register', [CustomerAuthController::class,'register']);
//     Route::post('login', [CustomerAuthController::class,'login']);
//     Route::post('logout', [CustomerAuthController::class,'logout']);
//     Route::post('refresh', [CustomerAuthController::class,'refresh']);
//     Route::post('me', [CustomerAuthController::class,'me']);
// });

// Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    //     Route::post('logout', [AuthController::class,'logout']);
    //     Route::post('refresh', [AuthController::class,'refresh']);
    //     Route::post('me', [AuthController::class,'me']);
    // });
    
    Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
        Route::post('register', [CustomerAuthController::class,'register']);
        Route::post('login', [CustomerAuthController::class,'login']);
        Route::post('me', [CustomerAuthController::class,'me']);
        Route::post('logout', [CustomerAuthController::class,'logout']);
        Route::post('refresh', [CustomerAuthController::class,'refresh']);
});
