@extends('layouts.index')

@section('conteudo')

    <div class="container">
        <h3 class="text-center">Contratos</h3>

        <br>

        <a href="{{ route('admin.contratos.create') }}" class="btn btn-success"> Novo contrato</a>





        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Descrição</th>
                <th>Cliente (id) </th>
                <th>Quantidade</th>
                <th>Produto (id)</th>
                <th>Preço Unitario</th>
                <th>Total</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($contratos as $contrato)
            <tr>
                <td>{{ $contrato->id }}</td>
                <td>{{ $contrato->descricao }}</td>
                <td>{{ $contrato->cliente_id }}</td>
                <td>{{ $contrato->quantidade }}</td>
                <td>{{ $contrato->produto_id }}</td>
                <td>{{ $contrato->precoUnitario }}</td>
                <td>{{ $contrato->total }}</td>
                <td>
                    <a href="{{ route('admin.contratos.edit', ['id'=>$contrato->id]) }}" class=" btn btn-primary">Editar</a>
                    {{--<a href="#" class=" btn btn-success">Boleto</a>--}}
                    <a href="#" class=" btn btn-info">Cobrança</a>
                    <a href="{{ route('admin.contratos.destroy', ['id'=>$contrato->id]) }}" class=" btn btn-danger">Excluir</a>

            </tr>
            @endforeach
            </tbody>
        </table>



    {!! $contratos->render() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection
