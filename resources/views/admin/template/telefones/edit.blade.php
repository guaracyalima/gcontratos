@extends('layouts.index')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($telefones,['route' => ['admin.telefone.update', $telefones->id]]) !!}


    @include('admin.telefones._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection