@extends('layouts.index')

@section('conteudo')

    <h3>Editar filial {{$filials->id}}</h3>
    @include('errors._check')

    {!! Form::model($filials,['route' => ['admin.filial.update', $filials->id]]) !!}

    @include('admin.filial._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection