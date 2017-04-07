@extends('layouts.index')

@section('conteudo')

    <div class="container">
        @include('errors._check')

        {!! Form::model($receitas,['route' => ['admin.receitas.update', $receitas->id ],'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Editar receita - {{ $receitas->id }}</h5>
            </div>

            @include('admin.receitas._form')
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary center-block']) !!}
        </div>





            <div class="form-group">



            </div>



        {!! Form::close() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection
