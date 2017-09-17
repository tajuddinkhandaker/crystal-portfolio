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

/* Test */
Route::get('/phpinfo', function() {
    return phpinfo();
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('portfolios.portfolio-company');
});

Route::get('/demo/1', function () {
    return view('demo.recapcha');
});

Route::auth();

Route::get('/home', 'HomeController@index');


