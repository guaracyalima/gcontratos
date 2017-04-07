@extends('layouts.index')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($products,['route' => ['admin.produtos.update','files' => true , $products->id]]) !!}


    @include('admin.produtos._form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection