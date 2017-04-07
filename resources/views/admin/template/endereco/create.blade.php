@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar endereco</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.endereco.store', 'files' => true, 'class' => 'form-inline']) !!}

    @include('admin.endereco._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection
