@extends('app')

@section('content')


    <div class="container">

        <h3 class="text-center">{{ $cliente->nome }}</h3>
        <a href="{{ route('admin.clientes.edit', ['id'=>$cliente->id]) }}" class=" btn btn-primary" title="Editar cliente">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Editar
        </a>

        <a href="{{ route('admin.carnes.show', ['cpf'=>$cliente->cpf]) }}" class="btn btn-success">
            <i class="fa fa-usd" aria-hidden="true"></i>
            Financeiro
        </a>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>RG</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <a href="{{ route('admin.carnes.show', ['cpf'=>$cliente->cpf]) }}">{{ $cliente->nome }}</a>
                </td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->rg }} / {{ strtoupper($cliente->emissorRG) }}-{{ strtoupper($cliente->ufRG) }}</td>
                <td>{{ $cliente->sexo }}</td>
                <td>Rua {{ $cliente->logradouro }}, Nº {{ $cliente->numero }}, {{ $cliente->complemento }},
                    Bairro {{ $cliente->bairro }}, CEP {{ $cliente->cep }}, {{ $cliente->cidade }}-{{ strtoupper($cliente->UF) }} </td>


                <td>{{ $cliente->telefone }}</td>

            </tr>
            {{--@endforeach--}}
            </tbody>
        </table>

    </div>
@endsection