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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produtos', 'App\Http\Controllers\API\produtoController@index');
Route::get('/produtos {id}', 'App\Http\Controllers\API\produtoController@show');
Route::post('/produtos', 'App\Http\Controllers\API\produtoController@store');
Route::put('/produtos', 'App\Http\Controllers\API\produtoController@update');
Route::delete('/produtos', 'App\Http\Controllers\API\produtoController@destroy');
