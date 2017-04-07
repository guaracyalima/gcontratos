@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($logos,['route' => ['admin.logo.update', $logos->id]]) !!}


    @include('admin.logo._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection