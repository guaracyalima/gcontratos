@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar produtos</h3>
    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif

    {!! Form::open(['route' => 'admin.produtos.create', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}

        {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Ex: Fraldinha']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}

        {!! Form::textarea('descricao', null ,['class' => 'form-control', 'placeholder' => 'Ex: boa para churrasco']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}

        {!! Form::text('preco', null ,['class' => 'form-control', 'placeholder' => 'R$ 00,00']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('peso', 'Peso:') !!}

        {!! Form::text('peso', null ,['class' => 'form-control', 'placeholder' => '00,00 kg']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fornecedor', 'Fornecedor:') !!}

        {!! Form::text('fornecedor', null ,['class' => 'form-control', 'placeholder' => '00,00 kg']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('img', 'Imagem:') !!}

        {!! Form::file('img', null ,['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
    @endsection