<?php

use Illuminate\Http\Request;
use Firebase\Auth\Token\Verifier;

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

Route::get('/republic', 'RepublicController@index');
Route::get('/republic/{query}', ['as' => 'search', 'uses' => 'RepublicController@filter']);