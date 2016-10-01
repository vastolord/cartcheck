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

/*Route::get('/', function () {
    return view('index');
});*/


Route::group(['middleware'=>'web'], function(){

    Route::resource('/','ProductController');
    Route::resource('/cart/{id}','ProductController@show',['names' => ['create' => 'cart']]);



});
Route::auth();

Route::get('/home', 'HomeController@index');
