@extends('layouts.index')

@section('conteudo')

    <div class="container">

        @include('errors._check')


        {!! Form::open(['route' => 'admin.receitas.store', 'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Nova Receita</h5>
            </div>

            @include('admin.receitas._form')

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}
        </div>

        {!! Form::close() !!}


    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection
