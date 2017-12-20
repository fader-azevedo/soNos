<?php
use App\Http\Middleware\Mdw;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'mensalidade'], function (){
    Route::get('/','MensalidadeController@index')->middleware(Mdw::class,'auth');
    Route::get('registar','MensalidadeController@registarMensalidade')->middleware(Mdw::class,'auth');
});

Route::get('/candidato','AlunoController@candidato')->name('candidato')->middleware(Mdw::class,'auth');
//Route::get('usuarios',['as'=>'users.index','uses'=>'AlunoController@index']);
Route::resource('aluno','AlunoController');

Route::post('salvarCandidato','RegisterController@teste')->name('salvarCandidato');