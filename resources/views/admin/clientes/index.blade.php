@extends('app')

@section('content')

@section('post-script')

    <script type="text/javascript">
        $(document).on("change", "#produto_id", function(){

            var precoRetornado = $(this).val();

            $.get('/admin/clientes/get-preco/' + precoRetornado, function (preco) {
                $('select[name=valorUnitario]').empty();
                $.each(preco, function (key, value) {
                    $('select[name=valorUnitario]').append('<option value=' + value.precoUnitario + '>' + value.precoUnitario + '</option>');
                });
            })
        });

    </script>
    @endsection


    <div class="container">
        <h3 class="text-center">Clientes</h3>

        <br>

        @if(session('erro'))

            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('erro') }}</strong>
            </div>
        @endif

        <div class="center-block">
            <a href="{{ route('admin.clientes.create') }}" class="btn btn-success">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Novo cliente
            </a>

            <a href="#" class="btn btn-warning"
               data-toggle="modal" data-target="#definirParcelamento" id="getModalParcelamento" id>
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Forma de pagamento
            </a>

        </div>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>
                        <a href="{{ route('admin.carnes.show', ['cpf'=>$cliente->cpf]) }}">{{ $cliente->nome }}</a>
                    </td>

                    <td>{{ $cliente->cpf }}</td>

                    {{--<td class="enderecoTd">{{ $cliente->endereco }}</td>--}}

                    <td>{{ $cliente->telefone }}</td>

                    <td class="text-center">
                        <a href="{{ route('admin.carnes.show', ['cpf'=>$cliente->cpf]) }}" class="btn btn-success">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            Financeiro
                        </a>
                        <a href="{{ route('admin.clientes.show', ['id'=>$cliente->id]) }}" class="btn btn-info">
                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>

                        <a href="{{ route('admin.clientes.edit', ['id'=>$cliente->id]) }}" class=" btn btn-primary" title="Editar cliente">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Editar
                        </a>
                        <a href="{{ route('admin.clientes.destroy', ['id'=>$cliente->id]) }}" class=" btn btn-danger" title="Excuir cliente">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                            Excluir
                        </a>

                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $clientes->render() !!}

    </div>

    {{--Modals--}}

    {{--Define parcelamento--}}
    <div class="modal fade" id="defineParcelamento" tabindex="-1" role="dialog" aria-labelledby="definirParcelamento" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLabel">Definir parcelamento</h3>
                </div>
                <div class="modal-body">
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
                                    {!! Form::select('cpf',$clienteCerto, null,['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('carne_id', 'Carnê:') !!}
                                    {!! Form::select('carne_id', [],null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('produto_id', 'Produto:') !!}
                                    {!! Form::select('produto_id',$produtos, null ,['class' => 'form-control']) !!}
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
                                    {!! Form::select('valorUnitario', [], null ,['class' => 'form-control']) !!}
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
                    </div> {{-- Panel-Body--}}

                </div> {{--panel--}}

            </div>
        </div>
    </div>

    {{--Define parcelamento--}}
    <p class="text-center text-primary">developed by guabirabaDev</p>











































    {{--@include('errors._check')--}}

    {{--<div class="panel panel-success">--}}

        {{--<div class="panel-heading">--}}
            {{--<h4>Forma de pagamento</h4>--}}
        {{--</div>--}}

        {{--<div class="panel-body">--}}
            {{--@include('errors._check')--}}

            {{--{!! Form::open(['send'=>'/admin/carnes/ajaxParcela', 'class' => 'formDefineParcelamento form-inline']) !!}--}}

            {{--<div class="row">--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('cpf', 'Cliente:') !!}--}}
                    {{--{!! Form::select('cpf',$clienteCerto) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                {{--{!! Form::label('carne_id', 'Carnê:') !!}--}}
                {{--{!! Form::select('carne_id', $idDosCarnes, null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('carne_id', 'Carnê:') !!}--}}
                    {{--{!! Form::select('carne_id', []) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('Produto', 'Produto:') !!}--}}
                    {{--{!! Form::select('produto_id',$produtos, null ,['class' => 'form-control', 'placeholder' => 'id do produto']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('quantidade', 'Quantidade:') !!}--}}
                    {{--{!! Form::text('quantidade', null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}

            {{--<div class="row">--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('valorUnitario', 'Valor Unitario:') !!}--}}
                    {{--{!! Form::text('valorUnitario', null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('entrada', 'Entrada:') !!}--}}
                    {{--{!! Form::text('entrada', null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('desconto', 'Desconto:') !!}--}}
                    {{--{!! Form::text('desconto', null ,['class' => 'form-control', 'onblur' => 'calculaTotal()']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('numParcelas', 'Numero de parcelas:') !!}--}}
                    {{--{!! Form::text('numParcelas', null ,['class' => 'form-control', 'onblur' => 'calculaValorParcela()']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('vencimento', 'Primeiro Vencimento:') !!}--}}
                    {{--{!! Form::input('date','vencimento', null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="row">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('valorParcela', 'Valor da parcela:') !!}--}}
                    {{--{!! Form::text('valorParcela', null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('total', 'Total:') !!}--}}
                    {{--{!! Form::text('total', null ,['class' => 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--</div>--}}
            {{--<div class="preloader" style=" display: none">--}}
                {{--Sending data...--}}
            {{--</div>--}}
        {{--</div>--}}


            {{--<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>--}}
            {{--{!! Form::submit( 'Definir parcelas', ['class' => 'btn btn-primary']) !!}--}}
            {{--{!! Form::close() !!}--}}






















@endsection