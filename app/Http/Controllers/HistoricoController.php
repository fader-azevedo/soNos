<?php

namespace App\Http\Controllers;

use App\Inscricao;
use Illuminate\Http\Request;

class HistoricoController extends Controller{

    public function index(){
        $alunos = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')
            ->select('alunos.*')->distinct('idAluno')->where('estado','=','pre-inscrito')
            ->where('ano','=',date('Y')-1)->paginate(6);
        return view('historico.alunosPassados',compact('alunos'));
    }
}