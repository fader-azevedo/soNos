<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, Auth;

class HomeController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        if(Auth::user()->perfil == 'admin'){
            return view('admin.adminHome');
        }else{
            return view('aluno.alunoHome');
        }
    }
}
