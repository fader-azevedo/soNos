<?php

namespace App\Http\Controllers;

use App\Inscricao;

class InscricaoController extends Controller{
    public function getInscricao(){
        $inscricao = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')->join('disciplinas','inscricaos.idDisciplina','=','disciplinas.id')
            ->join('contactos','alunos.idContacto','=','contactos.id')
            ->select('disciplinas.*','disciplinas.nome as disciplina','disciplinas.id as idDisciplina','alunos.*','contactos.*')
            ->where('idAluno',$_POST['idAluno'])->where('ano',$_POST['ano'])->get();
        return  response()->json(array('inscricao'=>$inscricao));
    }
}