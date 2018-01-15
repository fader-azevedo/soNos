<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Inscricao;
use App\User;

class AlunoController extends Controller{

    protected $candidato;
    public function __construct(Aluno $aluno){
        $this->candidato = $aluno;
    }

    public function getFoto(){
        $data = $_POST['image'];
        list(, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);

        $data = base64_decode($data);
        $imageName = $_POST['codigo'].'.jpg';
        file_put_contents(public_path().'\img\alunos\foto_'.$imageName, $data);
    }

    public function getUltimoCandidato(){
        return Inscricao::query()->where('estado','=','pre-inscrito')->where('ano','=',date('Y'))->min('idAluno');
    }

    public function candidatoIndex(){
        $candidato = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')
            ->select('alunos.*')->distinct('idAluno')->where('estado','=','pre-inscrito')
            ->where('ano','=',date('Y'))->paginate(6);

        $primeiroCand = Inscricao::query()
            ->join('alunos','inscricaos.idAluno','=','alunos.id')
            ->join('contactos','alunos.idContacto','=','contactos.id')
            ->select('alunos.*','contactos.*')->distinct('idAluno')->where('estado','=','pre-inscrito')
            ->where('ano','=',date('Y'))->where('idAluno','=',$this->getUltimoCandidato())->get();

        if(request()->ajax()){
            return view('candidato.candidatoTabela',['candidato'=>$candidato])->render();
        }

        return view('candidato.candidato',compact('candidato','primeiroCand'));
    }
}