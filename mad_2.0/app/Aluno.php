<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $table = 'alunos';

    protected $fillable = [
        'nome'
    ];

    public function matricula()
    {
        return $this->hasOne('App\Matricula', 'alunos_id', 'id');
    }
}
