@extends('layouts.index')

@section('conteudo')



    <h3>Gerenciar conteudo do topo</h3>
    @include('errors._check')

    {!! Form::model($topos,['route' => ['admin.topo.update', $topos->id]]) !!}


    @include('admin.topo._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection