@extends('layouts.admin')

@section('conteudo')


    <h3>Cadastrar serviço</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.servicos.store', 'files' => true, 'class' => '']) !!}

    @include('admin.servicos._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection