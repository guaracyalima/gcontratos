@extends('layouts.index')

@section('conteudo')


    <div class="container">
        @include('errors._check')

        {!! Form::model($categorias,['route' => ['admin.categorias.update', $categorias->id ],'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Editar categoria - {{ $categorias->id }}</h5>
            </div>

            @include('admin.categorias._form')
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary center-block']) !!}
        </div>





            <div class="form-group">



            </div>



        {!! Form::close() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection
