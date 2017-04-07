@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar filiais</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.filial.store', 'files' => true, 'class' => '']) !!}

    @include('admin.filial._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection