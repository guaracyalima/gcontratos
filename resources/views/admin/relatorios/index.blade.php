@extends('app')

@section('content')
    <div class="container">

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
            </tr>
            </thead>

            <tbody>
            @foreach($xtudo as $cliente)
                <tr>

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
                    <td>{{ $cliente->total }}</td>
                    <td>{{ $cliente->status }}</td>



                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $xtudo->render() !!}

    </div>

    </div>
@endsection