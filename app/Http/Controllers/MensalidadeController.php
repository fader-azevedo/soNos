<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensalidadeController extends Controller{
    public function index(){
        return view('mensalidade.listar');
    }
}
