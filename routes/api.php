<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('SY01400/login/', 'SY01400Controller@login');
Route::post('SY01400/menu/', 'SY01400Controller@menu_side');
Route::post('SY01400/menu/cards/', 'SY01400Controller@cards');
Route::get('MC40200/getCurrencyById/{id}', 'MC40200Controller@getCurrencyById');
Route::post('MC40200/addCurrency/{MC40200}', 'MC40200Controller@addCurrency');
//Route::resource('MC40200', 'MC40200Controller');

//Route::post('SY01400/menu/cards/{id_card}', 'SY01400Controller@cards');

//Route::resource('SY01400', 'SY01400Controller');
// Route::get('SY01400/getUserByUserId/{userId}', ['middleware' => 'cors','uses' => 'SY01400Controller@getUserByUserId']);

/* Route::group(['middleware' => 'auth.jwt'], function () {
    
}); */


/* PRUEBA JWT */ 
//Route::post('login', 'UsersController@login');
/* Route::group(['middleware' => 'auth.jwt','prefix' => 'auth'
], function ($router) {
    Route::post('logout', 'UsersController@logout');
    Route::post('refresh', 'UsersController@refresh');
    Route::post('me', 'UsersController@me');
}); */

