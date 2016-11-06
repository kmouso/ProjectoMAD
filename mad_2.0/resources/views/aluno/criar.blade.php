@extends('layout.app')

@section('content')

    <h1>Aluno</h1>
    <hr>

    <div class="panel panel-default">
        <div class="panel-body">

            {!! Form::open(['method' => 'POST', 'url' => 'alunos']) !!}

                <div class="form-group">
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Criar', ['class' => 'btn btn-primary btn-block']) !!}
                </div>

            {!! Form::close() !!}

            @if ($errors->any())
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
            @endif
            </div>
        </div>

@stop
