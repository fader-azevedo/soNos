<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('criarFoto','AlunoController@salvarFoto')->name('criarFoto');//salvar foto no diretorio
Route::post('kappa', 'RegisterController@create1')->name('kappa');

/*Inscricao*/
Route::post('/getInscricao','InscricaoController@getInscricao');
Route::post('/getAlunos','InscricaoController@getAlunos');
Route::post('/utimoCandidato','InscricaoController@getUltimoCandidato');