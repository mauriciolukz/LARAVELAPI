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

//Login
Route::post('SY01400/login/', 'SY01400Controller@login');
//Probando middleware de ruta, se quito porque se usa global
// Route::get('SY01400/getUserByUserId/{userId}', ['middleware' => 'cors','uses' => 'SY01400Controller@getUserByUserId']);
//Route::post('SY01400/menu/', 'SY01400Controller@menu_side');
//Route::post('SY01400/menu/cards/', 'SY01400Controller@cards');

Route::group(['middleware' => 'auth.jwt'], function () {
    //Menu
    Route::post('SY01400/menu/', 'SY01400Controller@menu_side');
    Route::post('SY01400/menu/cards/', 'SY01400Controller@cards');

    //Moneda
    Route::get('MC40200/getCurrencyById/{id}', 'MC40200Controller@getCurrencyById');
    Route::get('MC40200/getCurrencyAllByLimit/{init}/{limit}', 'MC40200Controller@getCurrencyAllByLimit');
    Route::post('MC40200/addCurrency/', 'MC40200Controller@addCurrency');
    Route::put('MC40200/updateCurrency/{id}', 'MC40200Controller@updateCurrency');
    Route::delete('MC40200/deleteCurrency/{id}', 'MC40200Controller@deleteCurrency');

    //Genericos
    Route::get('generic/getNextNoteIndex/', 'GeneriController@getNextNoteIndex');

}); 


