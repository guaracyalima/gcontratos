@extends('app')

@section('content')

    <div class="container">
        @include('errors._check')

        {!! Form::model($pagamento,['route' => ['admin.pagamentos.update', $pagamento->id ],'class' => 'form-inline']) !!}

        <div class="panel panel-primary text-center">



            <div class="panel-heading">
                <h5 class="text-center">Editar forma de pagamento - {{ $pagamento->nome }}</h5>
            </div>

            @include('admin.pagamentos._form')
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}
        </div>
        {!! Form::close() !!}


    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection