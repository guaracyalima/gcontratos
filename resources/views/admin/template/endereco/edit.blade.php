@extends('layouts.index')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($endereco,['route' => ['admin.endereco.update', $endereco->id]]) !!}


    @include('admin.endereco._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection