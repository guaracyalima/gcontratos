@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar informações do topo da pagina</h3>
    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif

    {!! Form::open(['route' => 'admin.topo.create', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}

        {!! Form::text('titulo', null ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descriçao:') !!}

        {!! Form::textarea('descricao', null ,['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection