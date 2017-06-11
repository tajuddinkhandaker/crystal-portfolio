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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('portfolios.portfolio-company');
});

Route::group(['prefix' => 'api/v1', 'middleware' => 'guest:api', 'as' => 'public::'], function () {

	Route::resource('contacts', 'ContactController');
});

Route::auth();

Route::get('/home', 'HomeController@index');

