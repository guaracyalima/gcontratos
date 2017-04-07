@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar redes sociais</h3>
    @include('errors._check')

    {!! Form::model($social,['route' => ['admin.social.update', $social->id]]) !!}


    @include('admin.social._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection