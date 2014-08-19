<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

//Route::controller('/','MainPageController');

//Route::resource('frontend.MainPageController', 'PhotoCommentController');

Route::get('/', 'MainPageController@showWelcome');
//Route::group(array('prefix' => 'frontend'), function()
//{
//    # Admin Dashboard
//    Route::controller('/', 'MainPageController');
//});