@extends('app')

@section('content')

    <div class="container">
        @include('errors._check')

        {!! Form::model($carne,['route' => ['admin.carnes.update', $carne->id ],'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Editar carnê emitido - {{ $carne->id }}</h5>
            </div>

            @include('admin.carnes._form')
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary center-block']) !!}
        </div>





            <div class="form-group">



            </div>



        {!! Form::close() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection