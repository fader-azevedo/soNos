
<?php
use App\Http\Middleware\Mdw;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'mensalidade'], function (){
    Route::get('/','MensalidadeController@index')->middleware(Mdw::class,'auth');
    Route::get('registar','MensalidadeController@registarMensalidade')->middleware(Mdw::class,'auth');
});

Route::get('/candidato','AlunoController@candidato')->name('candidato')->middleware(Mdw::class,'auth');
