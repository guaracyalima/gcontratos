@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar ovo conteudo para o topo</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.topo.store', 'files' => true, 'class' => '']) !!}

    @include('admin.topo._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection