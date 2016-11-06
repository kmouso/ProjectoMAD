<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Aluno;
use App\Estado;
use App\Categoria;

class MatriculaController extends Controller
{
    //
    public function create()
    {
        $alunos = Aluno::pluck('nome', 'id');
        $categorias = Categoria::pluck('descricao', 'id');
        $estados = Estado::pluck('descricao', 'id');

        return view('matricula.criar', compact('alunos', 'categorias', 'estados'))
        ->with('title', 'Nova Matricula');
    }

    public function store(Request $request)
    {
        $matriculas = new matricula;

        $matriculas->alunos_id = $request->alunos_id;
        $matriculas->estados_id = $request->estados_id;
        $matriculas->categorias_id = $request->categorias_id;
        $matriculas->obs = $request->obs;

        $matriculas->save();

        return redirect('alunos');
    }
}
