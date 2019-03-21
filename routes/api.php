<?php

use Illuminate\Http\Request;

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

// Route::get('/post', 'PostApiController@show_all_data');
// Route::get('/post/{id}', 'PostApiController@show_data_by_id');
// Route::post('/post', 'PostApiController@create_data');
// Route::put('/post/{id}', 'PostApiController@update');
// Route::patch('/post/{id}', 'PostApiController@update');
// Route::delete('/post/{id}', 'PostApiController@delete_data_by_id');
Route::resource('post','PostApiController');
// Route::resource('crud','PostController');