@extends('layouts.index')

@section('conteudo')
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade </th>
                <th>Preço Unitario</th>
            </tr>
            </thead>

            <tbody>
            {{--@foreach($produto as $item)--}}
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->precoUnitario }}</td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection
