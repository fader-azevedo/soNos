<?php

namespace App\Http\Controllers;

use App\Inscricao;
use Illuminate\Http\Request;

class HistoricoController extends Controller{

    public function index(){
        $alunos = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')
            ->join('contactos','alunos.idContacto','=','contactos.id')
            ->select('alunos.*','contactos.*')->distinct('idAluno')
            ->where('ano','<>',date('Y'))->paginate(6);
        return view('historico.alunosPassados',compact('alunos'));
    }
}