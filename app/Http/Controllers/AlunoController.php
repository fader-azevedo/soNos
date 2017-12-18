<?php

namespace App\Http\Controllers;

use App\Inscricao;

class AlunoController extends Controller{

    private $aluno;
    public function getFoto(){
        $data = $_POST['image'];
        list(, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);

        $data = base64_decode($data);
        $imageName = $_POST['codigo'].'.jpg';
        file_put_contents(public_path().'\img\alunos\foto_'.$imageName, $data);
    }

    public function candidato(){
        $ano = date('Y');
        $candidato = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')->select('alunos.*')->distinct('idAluno')->where('estado','=','pre-inscrito')->where('ano',$ano)->get();
        return view('aluno.candidato',compact('candidato'));
    }
}
