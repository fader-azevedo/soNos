<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model{

    public function getInscricao(){
        return $this->morphToMany(Inscricao::class,'inscricao');
    }
}
