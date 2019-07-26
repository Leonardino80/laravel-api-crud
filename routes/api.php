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



// rotta che non restituisce una vista, c'è già scritto api davanti nel link
// il controller vuole lo slash girato \ !!!
route::get('/movies', 'Api\MovieController@index');
// rotta per la show, richiede l'id
route::get('/movies/{id}', 'Api\MovieController@show');
