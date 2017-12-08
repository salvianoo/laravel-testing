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

    $letter = $request->query('letter');

    if ($letter) {

        $contatos = Contato::by_letter($letter);

    } else {

        $contatos = Contato::select('firstname', 'lastname', 'email')
                            ->orderBy('lastname')->get();
    }

    return response()->json($contatos);

});
