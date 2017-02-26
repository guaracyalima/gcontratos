@extends('app')

@section('content')

    <div class="container">

        @include('errors._check')


        {!! Form::open(['route' => 'admin.categorias.store', 'class' => 'form-inline']) !!}

        <div class="panel panel-primary">



            <div class="panel-heading">
                <h5 class="text-center">Nova categoria</h5>
            </div>

            @include('admin.categorias._form')

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}
        </div>

        {!! Form::close() !!}


    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection