<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('criarFoto','AlunoController@getFoto')->name('criarFoto');//salvar foto no diretorio
Route::post('kappa', 'RegisterController@create1')->name('kappa');

/*Inscricao*/
Route::post('/getInscricao','InscricaoController@getInscricao');