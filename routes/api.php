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

Route::post('/student', 'APIController@create');
Route::get('/students', 'APIController@show');
Route::get('/student/{id}', 'APIController@showById');
Route::put('/studentupdate/{id}', 'APIController@update');
Route::delete('/studentdelete/{id}', 'APIController@delete');
