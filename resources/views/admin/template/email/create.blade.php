@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar dados de contato</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.email.store', 'files' => true, 'class' => '']) !!}

    @include('admin.email._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection