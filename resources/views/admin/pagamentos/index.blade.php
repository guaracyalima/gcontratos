@extends('app')

@section('content')

    <div class="container">
        <h3 class="text-center">Formas de pagamentos</h3>

        <br>

        <a href="{{ route('admin.pagamentos.create') }}" class="btn btn-success"> Nova forma de pagamento</a>


        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Descrição</th>


                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($pagamentos as $pagamento)
            <tr>
                <td>{{ $pagamento->id }}</td>
                <td>{{ $pagamento->nome }}</td>
                <td>{{ $pagamento->descricao }}</td>


                <td>
                    <a href="{{ route('admin.pagamentos.edit', ['id'=>$pagamento->id]) }}" class=" btn btn-primary">Editar</a>
                    <a href="{{ route('admin.pagamentos.destroy', ['id'=>$pagamento->id]) }}" class=" btn btn-danger">Excluir</a>

            </tr>
            @endforeach
            </tbody>
        </table>



    {!! $pagamentos->render() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection