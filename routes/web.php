
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

/*Rotas de Admin*/

    Route::get('aa', 'AlunoController@aa')->name('aa');
    Route::get('aa',function (){
        return view('aluno.alunoList');
    })->middleware(Mdw::class);

//$u = App\User::query()->find(1);
//    Route::get('men/{user?}', function (App\User $user){
//        if($user->perfil == 'admin'){
//            return view('aluno.alunoList',compact('user'));
//        }else{
//            return view('aluno.alunoList',compact('user'));
//        }
//    });
