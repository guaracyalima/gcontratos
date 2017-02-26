@extends('app')

@section('content')

    <div class="container">
        <h3 class="text-center">Despeas</h3>

        <br>

        <a href="{{ route('admin.despesas.create') }}" class="btn btn-success"> Nova despesa</a>


        <table class="table table-bordered table-hover ">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Observação</th>
                <th>Valor</th>
                <th>Vencimento</th>
                <th>Juros</th>
                <th>Multa</th>
                <th>Total</th>
                <th>Situação</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($despesas as $despesa)
            <tr>
                <td>{{ $despesa->id }}</td>
                <td>{{ $despesa->nome }}</td>
                <td>{{ $despesa->descricao }}</td>
                <td>{{ $despesa->categoria }}</td>
                <td>{{ $despesa->observacao }}</td>
                <td>{{ $despesa->valor }}</td>
                <td>{{ $despesa->vencimento }}</td>
                <td>{{ $despesa->juros }}</td>
                <td>{{ $despesa->multa }}</td>
                <td>{{ $despesa->total }}</td>
                <td>{{ $despesa->status }}</td>
                <td>

                    <div class="row">

                        <a href="{{ route('admin.despesas.edit', ['id'=>$despesa->id]) }}" class=" btn btn-primary">Editar</a>
                        {{--<a href="{{ route('admin.despesas.generate', ['id' => $despesa->id]) }}" class=" btn btn-success">Baixa</a>--}}

                        <a href="{{ route('admin.despesas.destroy', ['id'=>$despesa->id]) }}" class=" btn btn-danger">Excluir</a>
                    </div>

            </tr>
            @endforeach
            </tbody>
        </table>



    {!! $despesas->render() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection