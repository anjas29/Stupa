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
Route::get('presence', 'ApiPresenceController@getPresence')->middleware('auth:api');
Route::get('profil', 'ApiPresenceController@getProfil')->middleware('auth:api');
Route::post('login', 'ApiAuthController@postLogin');
