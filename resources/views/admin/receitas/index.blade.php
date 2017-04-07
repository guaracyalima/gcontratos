@extends('layouts.index')

@section('conteudo')

    <div class="container">
        <h3 class="text-center">Receitas</h3>

        <br>

        <a href="{{ route('admin.receitas.create') }}" class="btn btn-success"> Nova receita</a>


        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Vencimento</th>
                <th>Valor</th>
                <th>Situação</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($receitas as $receita)
            <tr>
                <td>{{ $receita->id }}</td>
                <td>{{ $receita->nome }}</td>
                <td>{{ $receita->descricao }}</td>
                <td>{{ $receita->vencimento }}</td>
                <td>{{ $receita->valor }}</td>
                <td>{{ $receita->status }}</td>
                <td>

                    <div class="row">

                        <a href="{{ route('admin.receitas.edit', ['id'=>$receita->id]) }}" class=" btn btn-primary">Editar</a>
                        <a href="{{ route('admin.receitas.destroy', ['id'=>$receita->id]) }}" class=" btn btn-danger">Excluir</a>
                    </div>

            </tr>
            @endforeach
            </tbody>
        </table>



    {!! $receitas->render() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection
