@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar produto</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.produtos.store', 'files' => true, 'class' => '']) !!}

    @include('admin.produtos._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection