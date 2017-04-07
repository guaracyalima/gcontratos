@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar menus</h3>
    @include('errors._check')

    {!! Form::model($menus,['route' => ['admin.menu.update', $menus->id]]) !!}


    @include('admin.menu._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection