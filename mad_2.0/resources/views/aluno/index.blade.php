@extends('layout.app')

@section('content')

    <h1>Alunos</h1>
    <!-- Cabeçalho da tabela --->
        <table class="table table-hover">
            <thead>
                <th>Matricula</th>
                <th>Aluno</th>
                <th>Categoria</th>
                <th>Estado</th>
            </thead>

        <!-- Corpo da tabela-->
            <tbody>
                @foreach($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->numero_de_matricula }}</td>
                        <td>{{ $aluno->aluno->nome }}</td>
                        <td>{{ $aluno->categoria->descricao }}</td>
                        <td>{{ $aluno->estado->descricao }}</td>
                        
                        <!---
                        <td>{{ $aluno->numero_de_matricula }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->categoria }}</td>
                        <td>{{ $aluno->estado }}</td>
                        -->
                    </tr>
                @endforeach
            </tbody>

        </table>
    <a href="{{ url('alunos/create') }}">novo cliente</a>
@stop
