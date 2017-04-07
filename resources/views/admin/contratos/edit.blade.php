@extends('layouts.index')

@section('conteudo')
    <div class="container">
        @include('errors._check')

        {!! Form::model($contrato,['route' => ['admin.contratos.update', $contrato->id ],'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Editar contrato Nº {{ $contrato->id }}</h5>
            </div>

            @include('admin.contratos._form')
            {!! Form::submit('Alterar', ['class' => 'btn btn-primary center-block']) !!}
        </div>





            <div class="form-group">



            </div>



        {!! Form::close() !!}


    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection
