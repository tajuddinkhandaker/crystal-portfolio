<?php

use Illuminate\Support\Facades\Log;
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

Route::group(['prefix' => 'v1', 'middleware' => 'guest:api', 'as' => 'public::'], function () {

    Route::resource('contacts', 'ContactController');

	Route::get('/app', function (Request $remoteRequest) {

		Log::info('[Remote Request][Requested from :' . $remoteRequest->ip() . ':'. $remoteRequest->server('SERVER_PORT', 'Unknown') . ']');
	    return response()->json('crystal-portfolio');
	})->middleware('cors');
});

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api', 'as' => 'private::'], function () {

    Route::resource('clients/actions', 'RemoteActionController');
});
