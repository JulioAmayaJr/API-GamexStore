<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'users'], function ($router) {
    Route::post('/register', [App\Http\Controllers\JWTController::class, 'register']);
    Route::post('/login', [App\Http\Controllers\JWTController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\JWTController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\JWTController::class, 'refresh']);
    Route::post('/me', [App\Http\Controllers\JWTController::class, 'me']);
});

Route::apiResource('categories', CategoriesController::class);
Route::get('/subCategories',[ App\Http\Controllers\CategoriesController::class,'subCategories']);
