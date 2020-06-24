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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'API\UserController@details');

});

Route::get('buku', 'BukuController@index');
Route::post('buku', 'BukuController@create');
Route::put('/buku/{id}', 'BukuController@update');
Route::delete('/buku/{id}', 'BukuController@delete');

Route::get('sewa', 'PenyewaanController@index');
Route::post('sewa', 'PenyewaanController@create');
// Route::put('/sewa/{id}', 'PenyewaanController@update');
// Route::delete('/sewa/{id}', 'PenyewaanController@delete');

