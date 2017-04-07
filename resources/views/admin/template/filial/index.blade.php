@extends('layouts.index')

@section('conteudo')

    <div class="row">
        <div class="col-md-12">

            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Filiais
                    </div>
                    <a href="{{ route('admin.filial.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Nova Filial</span></a>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Endereço
                                </th>
                                <th>
                                    Telefone
                                </th>
                                <th>
                                    Whatsapp
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Ação
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($filials as $filial)
                                <tr>
                                    <td>{{$filial->nome}}</td>
                                    <td>{{$filial->endereco}}</td>
                                    <td>{{$filial->telefone}}</td>
                                    <td>{{$filial->whatsapp}}</td>
                                    <td>{{$filial->email}}</td>

                                    <td>

                                        <a href="{{ route('admin.filial.edit', ['id' => $filial->id]) }}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="{{ route('admin.filial.destroy', ['id' => $filial->id]) }}" class="btn btn-danger btn-sm">Deletar</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection