<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model{
    protected $fillable =['idAluno', 'idDisciplina','estado','ano'];
}
