<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'v1'], function () {

	Route::post('login', 'AuthController@login');
//	Route::post('logout', 'AuthController@logout');
//	Route::post('refresh', 'AuthController@refresh');
//	Route::post('me', 'AuthController@me');
//
//
//	Route::get('posts', 'PostController@getAllPosts');
//	Route::get('post/{id}', 'PostController@getPostById');


});
