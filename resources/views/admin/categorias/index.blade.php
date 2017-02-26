@extends('app')

@section('content')

    <div class="container">
        <h3 class="text-center">Categorias de despeas</h3>

        <br>

        <a href="{{ route('admin.categorias.create') }}" class="btn btn-success"> Nova categoria</a>


        <table class="table table-bordered table-hover ">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Ação</th>

            </tr>
            </thead>

            <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>

                    <td>



                            <a href="{{ route('admin.categorias.edit', ['id'=>$categoria->id]) }}" class=" btn btn-primary">Editar</a>
                            <a href="{{ route('admin.categorias.destroy', ['id'=>$categoria->id]) }}" class=" btn btn-danger">Excluir</a>


                </tr>
            @endforeach
            </tbody>
        </table>



        {!! $categorias->render() !!}




    </div>
    <p class="text-center text-primary">developed by guabirabaDev</p>
@endsection