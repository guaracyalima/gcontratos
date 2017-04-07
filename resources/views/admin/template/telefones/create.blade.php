@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar telefone</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.telefone.store', 'files' => true, 'class' => 'form-inline']) !!}

    @include('admin.telefones._form')

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection
@section('js')
    <script>
        $("#fone").mask("(00) 0 0000-0000");
    </script>
    @endsection