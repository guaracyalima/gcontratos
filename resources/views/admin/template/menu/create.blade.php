@extends('layouts.admin')

@section('conteudo')


    <h3>Cadastrar menus</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.menu.store', 'files' => true, 'class' => 'form-inline']) !!}

    @include('admin.menu._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection