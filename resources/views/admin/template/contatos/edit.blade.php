@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($contatos,['route' => ['admin.contatos.update', $contatos->id]]) !!}


    @include('admin.contatos._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection