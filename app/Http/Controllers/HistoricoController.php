<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoController extends Controller{

    public function index(){
        return view('historico.alunosPassados');
    }
}
