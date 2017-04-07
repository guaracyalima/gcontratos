@extends('layouts.index')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($sobres,['route' => ['admin.sobre.update', $sobres->id]]) !!}


    @include('admin.sobre._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection