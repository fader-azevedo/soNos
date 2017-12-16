<?php

namespace App\Http\Controllers\Auth;

use App\Aluno;
use App\Contacto;
use App\Encarregado;
use App\Inscricao;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest');
    }

    protected function validator(array $data){

        if($data['email']==''){
            $validate = Validator::make($data, [
                'apelido' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }else{
            $validate = Validator::make($data, [
                'apelido' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }
        return $validate;
    }

    private function criarEmail($nome, $apelido,$id){
        $apelido = str_replace(' ', '', $apelido);
        if (str_word_count($nome) > 1) {
            $nome = explode(' ', $nome);
            $email = $nome[0] . '.' .$apelido .$id. '@sonos.mz';
        } else {
            $email = $nome.'.'. $apelido.$id.'@sonos.mz';
        }
        return strtolower($email);
    }
    protected function create(array $data){
        $email = $data['email'];
        if($email == ''){
            $email = $this->criarEmail($data['name'],$data['apelido'],$data['id']);
        }
        $user =  User::create(['username' => $data['name'], 'email' => $email, 'password' => bcrypt($data['password']), 'perfil' => 'aluno', 'foto' => 'foto_'.$data['password'].'.jpg']);
        $idUser = $user->id;

        if($data['nomeEncarregado'] == '' && $data['contactoEncarregado']==''){
              $idEncarregado =1;
        }else{
            $encarregado = new Encarregado();
            $encarregado = $encarregado->create(['nome'=>$data['nomeEncarregado'], 'contacto'=>$data['contactoEncarregado']]);
            $idEncarregado = $encarregado->id;
        }

        $contacto = new Contacto();
        $contacto = $contacto->create(['numero'=>$data['numero'], 'email'=>$email]);
        $idContacto = $contacto->id;

        $aluno = new Aluno();
        $aluno = $aluno->create(['codigo'=>$data['password'],'apelido'=>$data['apelido'],'nome'=>$data['name'],'sexo'=>$data['sexo'],'dataNasc'=>$data['dataNasc'],'numBi'=>$data['numBi'],'naturalidade'=>$data['naturalidade'], 'residencia'=>$data['residencia'],'idContacto'=>$idContacto,'idUser'=>$idUser, 'idEncarregado'=>$idEncarregado,'foto'=>$data['password'].'.jpg']);
        $idAluno = $aluno->id;

        $inscricao = new Inscricao();
        for ($i = 0; $i < $data['numDis']; $i++) {
            $idDisciplina =$data['disciplina'.($i+1)];
            $inscricao->create(['idAluno' => $idAluno, 'idDisciplina' =>$idDisciplina,'estado'=>'pre-inscrito']);
        }
        return $user;
    }

//    public function criarFoto($nome, $apelido,$codigo){
//        $pasta = public_path().'\img\alunos\foto_'.$codigo.'.jpg';
//        $fonte = public_path().'\fonts\Roboto-Bold.ttf';
//        $char1 = strtoupper(substr($nome,0,1));
//        $char2 = strtoupper(substr($apelido,0,1));
//
//        $imagem = imagecreate( 250, 250 );
//        imagecolorallocate( $imagem, 171, 255, 253 );
//        $text_colour = imagecolorallocate( $imagem, 66, 74, 93);
//
//        imagettftext($imagem,90,0,40,170,$text_colour,$fonte,$char1.$char2);
//
//        imagejpeg($imagem,$pasta,100);
//        imagedestroy( $imagem );
//    }


}
