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

Route::get('/produtos', 'App\Http\Controllers\API\produtoController@index');  // Chamada para function index em produtoController
Route::get('/produtos/{id}', 'App\Http\Controllers\API\produtoController@show'); // Chamada para function show em produtoController
Route::post('/produtos', 'App\Http\Controllers\API\produtoController@store'); //Chamada para function store em produtoController
Route::put('/produtos/{id}', 'App\Http\Controllers\API\produtoController@update'); //Chamada para function update em produtoController
Route::delete('/produtos/{id}', 'App\Http\Controllers\API\produtoController@destroy'); //Chamada para function delete em produtoController

//route::apiResource('produtos', 'ProdutoController'); 
