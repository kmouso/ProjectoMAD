<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //
    protected $table = 'matriculas';

    protected $fillable = [
            'obs'
    ];

    public function aluno()
    {
        return $this->belongsTo('App\Aluno', 'alunos_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categorias_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado', 'estados_id');
    }
}
