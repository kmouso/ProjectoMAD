@extends('layout.app')

@section('content')

    <h1>Matricula Aluno</h1>
    <hr>

    <div class="panel panel-default">
        <div class="panel-body">

            {!! Form::open(['method' => 'POST', 'url' => 'matriculas']) !!}

                <div class="form-group">
                    {!! Form::label('alunos_id', 'Aluno') !!}
                    {!! Form::select('alunos_id', $alunos, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('categorias_id', 'Categoria') !!}
                    {!! Form::select('categorias_id', $categorias, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                   {!! Form::label('aulas_id', 'Aulas') !!}
                   {!! Form::select('aulas_id', ['key' => '1', 'key2' => '2', 'key3' => '3'], null, ['class' => 'form-control', 'multiple']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('obs', 'Observações') !!}
                    {!! Form::textarea('obs', null, ['class' => 'form-control', 'size' => '30x5']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('estados_id', 'Estados') !!}
                    {!! Form::select('estados_id', $estados, null, ['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Criar', ['class' => 'btn btn-primary btn-block']) !!}
                </div>

            {!! Form::close() !!}



            </div>
        </div>

@stop
