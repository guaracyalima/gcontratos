@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar informações da empresa</h3>
    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif

    {!! Form::open(['route' => 'admin.sobre.create', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('titulo', 'Nome:') !!}

        {!! Form::text('titulo', null ,['class' => 'form-control', 'placeholder' => 'Frigomil']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slogan', 'Slogan:') !!}

        {!! Form::textarea('slogan', null ,['class' => 'form-control', 'placeholder' => 'Confiança qualidade e vida']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('coldireita', 'Primeira coluna:') !!}

        {!! Form::textarea('coldireita', null ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('coldesquerda', 'Segunda coluna:') !!}

        {!! Form::textarea('coldesquerda', null ,['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection