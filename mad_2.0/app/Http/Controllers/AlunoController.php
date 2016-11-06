<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Aluno;
use App\Matricula;

class AlunoController extends Controller
{
    //
    public function index()
    {
        /*
        $alunos = DB::table('alunos')
                    ->join('matriculas', 'alunos.id', '=', 'matriculas.numero_de_matricula')
                    ->join('categorias', 'categorias.id', '=', 'matriculas.numero_de_matricula')
                    ->join('estados', 'estados.id', '=', 'matriculas.numero_de_matricula')
                    ->select('matriculas.numero_de_matricula', 'alunos.nome', 'categorias.descricao as categoria', 'estados.descricao as estado')
                    ->get(); */

        $alunos = Matricula::all();

        return view('aluno.index', compact('alunos'))
        ->with('title', 'Alunos');
    }

    public function create()
    {
        return view('aluno.criar')
        ->with('title', 'Novo Aluno');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['nome' => 'required']);

        Aluno::create([
            'nome' => $request->nome
        ]);
        return redirect('matriculas/create');
    }
}
