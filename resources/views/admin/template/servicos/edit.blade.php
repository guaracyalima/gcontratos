@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($servicos,['route' => ['admin.servicos.update','files' => true , $servicos->id]]) !!}


    @include('admin.servicos._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection