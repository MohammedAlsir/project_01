<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', 'App\Http\Controllers\Api\ApiController@login');
Route::group(['middleware' => ['auth:admin-api']], function () {
    Route::get('courses', 'App\Http\Controllers\Api\ApiController@courses');
    Route::put('profile', 'App\Http\Controllers\Api\ApiController@profile');
    Route::resource('orders', 'App\Http\Controllers\Api\OrderController');
});