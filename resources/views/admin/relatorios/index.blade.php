@extends('app')

@section('content')
    <div class="container">

        <h3 class="text-center text-primary">A receber este mês</h3>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>

                <th>CPF</th>
                <th>Nº do carnê</th>
                <th>Produtos</th>
                <th>Quantidade</th>
                <th>Valor Unitario</th>
                <th>Valor de Entrada</th>
                <th>Desconto</th>
                <th>Nº de parcelas</th>
                <th>Vencimento</th>
                <th>Valor da parcela</th>
                <th>Total</th>
                <th>Situação</th>
                <th>

                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($xtudo as $cliente)

                @if(date('m/y', strtotime($cliente->vencimento)) == date('m/y') )

                    @if($cliente->status == 0)
                        <tr class="warning">
                    @elseif($cliente->status !== 0)
                        <tr class="info">
                    {{--@elseif($cliente->status == 2)--}}
                        {{--<tr class="warning">--}}
                    {{--@elseif($cliente->status == 3)--}}
                        {{--<tr class="active">--}}
                    @endif

                            <td><a href="{{ route('admin.carnes.show', ['cpf'=>$cliente->cpf]) }}">{{ $cliente->cpf }}</a></td>
                            <td>{{ $cliente->carne_id }}</td>
                            <td>{{ $cliente->produto_id }}</td>
                            <td>{{ $cliente->quantidade }}</td>
                            <td>{{ $cliente->valorUnitario }}</td>
                            <td>{{ $cliente->entrada }}</td>
                            <td>{{ $cliente->desconto }}</td>
                            <td>{{ $cliente->numParcelas }}</td>
                            <td>{{ date('d/m/Y', strtotime($cliente->vencimento)) }}</td>
                            <td>{{ $cliente->valorParcela }}</td>
                            <td class="total">{{ $cliente->total }}</td>
                            <td class="text-center">
                                @if($cliente->created_at == $cliente->updated_at)

                                @endif
                                @if($cliente->status == 1)
                                    <p class="status1">
                                        <strong class="iconStatus">
                                            <i class="fa fa-check-circle " aria-hidden="true"></i>
                                        </strong>
                                        Pago
                                    </p>
                                @elseif($cliente->status == 0)
                                    <p class="status0">
                                        <strong class="iconStatus">
                                            <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                                        </strong>
                                        Pendente
                                    </p>
                                @elseif($cliente->status == 3)
                                    <p class=" status3">
                                        <strong class="iconStatus">
                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                        </strong>
                                        Cancelado
                                    </p>
                                @endif
                            </td>



                        </tr>
                    @endif
                    @endforeach
            </tbody>
        </table>

        {{--{!! $xtudo->render() !!}--}}

    </div>

    </div>
@endsection