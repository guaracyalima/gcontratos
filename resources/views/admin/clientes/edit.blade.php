@extends('layouts.index')

@section('conteudo')

    <div class="container">
        @include('errors._check')

        {!! Form::model($cliente,['route' => ['admin.clientes.update', $cliente->id ],'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Editar dados de cliente - {{ $cliente->nome }}</h5>
            </div>

            @include('admin.clientes._form')
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary center-block']) !!}
        </div>
        {!! Form::close() !!}


    </div>

@endsection
