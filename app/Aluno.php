<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model{
    protected $fillable =['codigo','apelido','nome','sexo','dataNasc','numBi','naturalidade','residencia','foto','idUser','idContacto','idEncarregado'];


    public function getInscricao(){
        return $this->hasMany(Inscricao::class,'idAluno');
    }
}
