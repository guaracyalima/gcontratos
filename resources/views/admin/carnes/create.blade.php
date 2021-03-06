@extends('layouts.index')

@section('conteudo')

    <div class="container">

        @include('errors._check')


        {!! Form::open(['route' => 'admin.carnes.store', 'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Novo Carnê</h5>
            </div>

            @include('admin.carnes._form')

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}
        </div>

        {!! Form::close() !!}


    </div>



@endsection
