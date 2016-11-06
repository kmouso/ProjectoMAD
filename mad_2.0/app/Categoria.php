<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categorias';

    public function matricula()
    {
        return $this->hasMany('App\Matricula');
    }
}
