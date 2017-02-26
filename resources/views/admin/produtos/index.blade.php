@extends('app')

@section('content')

    <div class="container">
        <h3 class="text-center">Produtos</h3>

        <br>

        <a href="{{ route('admin.produtos.create') }}" class="btn btn-success"> Novo produto</a>


        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade </th>
                <th>Preço Unitario</th>

                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td><a href="{{ route('admin.produtos.show', ['id'=> $produto->id]) }}">{{ $produto->nome }}</a></td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>{{ $produto->precoUnitario }}</td>

                <td>
                    <a href="{{ route('admin.produtos.edit', ['id'=>$produto->id]) }}" class=" btn btn-primary">Editar</a>
                    <a href="{{ route('admin.produtos.destroy', ['id'=>$produto->id]) }}" class=" btn btn-danger">Excluir</a>

            </tr>
            @endforeach
            </tbody>
        </table>



    {!! $produtos->render() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection