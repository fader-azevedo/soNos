<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Inscricao extends Model{
    use Sortable;
    protected $fillable =['idAluno', 'idDisciplina','estado','ano'];
    protected $sortable = ['idAluno'];


}