@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar informações de contato</h3>
    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif

    {!! Form::open(['route' => 'admin.contato.create', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('fone', 'Telefone:') !!}

        {!! Form::text('fone', null ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('endereco', 'Edereço:') !!}

        {!! Form::textarea('endereco', null ,['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection