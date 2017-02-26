@extends('app')

@section('content')

@section('post-script')

    <script>

        $('select[name=cpf]').change(function () {
            var clienteCPF = $(this).val();
            $.get('admin/clientes/get-carne/' + clienteCPF, function (carnes) {
                $('select[name=carne_id]').empty();
                $.each(carnes, function (key, value) {
                    $('select[name=carne_id]').append('<option value=' + value.id + '>' + value.carnes + '</option>');
                });
            });
        });

    </script>
    @include('errors._check')

    <div class="panel panel-success">

        <div class="panel-heading">
            <h4>Forma de pagamento</h4>
        </div>

        <div class="panel-body">
            @include('errors._check')

            {!! Form::open(['send'=>'/admin/carnes/ajaxParcela', 'class' => 'formDefineParcelamento form-inline']) !!}

            <div class="row">
                <div class="form-group">
                    {!! Form::label('cpf', 'Cliente:') !!}
                    {!! Form::select('cpf',$clienteCerto, null ,['class' => 'form-control', 'placeholder' => 'id do cliente']) !!}
                </div>

                {{--<div class="form-group">--}}
                {{--{!! Form::label('carne_id', 'Carnê:') !!}--}}
                {{--{!! Form::select('carne_id', $idDosCarnes, null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}

                <div class="form-group">
                    {!! Form::label('carne_id', 'Carnê:') !!}
                    {!! Form::select('carne_id', []) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Produto', 'Produto:') !!}
                    {!! Form::select('produto_id',$produtos, null ,['class' => 'form-control', 'placeholder' => 'id do produto']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('quantidade', 'Quantidade:') !!}
                    {!! Form::text('quantidade', null ,['class' => 'form-control']) !!}
                </div>
            </div>
            <hr>

            <div class="row">

                <div class="form-group">
                    {!! Form::label('valorUnitario', 'Valor Unitario:') !!}
                    {!! Form::text('valorUnitario', null ,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('entrada', 'Entrada:') !!}
                    {!! Form::text('entrada', null ,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desconto', 'Desconto:') !!}
                    {!! Form::text('desconto', null ,['class' => 'form-control', 'onblur' => 'calculaTotal()']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('numParcelas', 'Numero de parcelas:') !!}
                    {!! Form::text('numParcelas', null ,['class' => 'form-control', 'onblur' => 'calculaValorParcela()']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('vencimento', 'Primeiro Vencimento:') !!}
                    {!! Form::input('date','vencimento', null ,['class' => 'form-control']) !!}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group">
                    {!! Form::label('valorParcela', 'Valor da parcela:') !!}
                    {!! Form::text('valorParcela', null ,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('total', 'Total:') !!}
                    {!! Form::text('total', null ,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
            </div>
            <div class="preloader" style=" display: none">
                Sending data...
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            {!! Form::submit( 'Definir parcelas', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    @endsection