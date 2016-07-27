<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'middleware' => 'auth', 'uses' => 'PictureController@index']);
Route::get('/login', function(){
    return view('login');
});
Route::post('/auth',['as' => 'auth', 'uses' => 'AuthController@connect']);
Route::post('/send',['as' => 'picture_send', 'uses' => 'PictureController@store']);