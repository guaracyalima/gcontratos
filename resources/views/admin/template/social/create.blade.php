@extends('layouts.admin')

@section('conteudo')


    <h3>Cadastrar redes sociais</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.social.store', 'files' => true, 'class' => 'form-inline']) !!}

    @include('admin.social._form')

    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}
    </div>

    {!! Form::close() !!}
@endsection