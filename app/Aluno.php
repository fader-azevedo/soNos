<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model{
    protected $fillable =['apelido','nome','sexo','dataNasc','naturalidade','residencia','foto','idUser','idContacto','idEncarregado'];
}
