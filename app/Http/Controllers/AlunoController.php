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

    public function candidato(){
//        $al = Aluno::sortable()->paginate(1);
//        $al = Aluno::all();
//        $candidato = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')->select('alunos.*')->distinct('idAluno')->where('estado','=','pre-inscrito')->where('ano',$ano)->paginate(6);
        $candidato = Inscricao::query()->join('alunos','inscricaos.idAluno','=','alunos.id')
            ->select('alunos.*')->distinct('idAluno')->where('estado','=','pre-inscrito')
            ->where('ano','=',date('Y'))->paginate(6);

        if(request()->ajax()){
            return view('aluno.candidatoTabela',['candidato'=>$candidato])->render();
        }
        return view('aluno.candidato',compact('candidato'));
    }

    public  function index(){
        $users = User::all();
        return view('users.index')->with(compact('users'));
    }


}