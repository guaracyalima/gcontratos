@extends('layouts.admin')

@section('conteudo')


    <h3>Cadastrar dados de contato</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.contatos.store', 'files' => true, 'class' => '']) !!}

    @include('admin.contatos._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection