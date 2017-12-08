<?php

use Illuminate\Http\Request;
use App\Contato;

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

Route::get('/contatos', function(Request $request) {

    $params = $request->query;
    // dd($params);

    return (new Contato)->search_by_letter($request->query);

});
