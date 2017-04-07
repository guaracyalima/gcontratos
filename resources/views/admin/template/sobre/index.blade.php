@extends('layouts.index')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">

            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Sobre
                    </div>
                    <a href="{{ route('admin.sobre.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Informações da empresa</span></a>
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
                                    Slogan
                                </th>
                                <th>
                                    Missão
                                </th>
                                <th>
                                    Visão
                                </th>
                                <th>
                                    Valores
                                </th>
                                <th>
                                    Imagem
                                </th>
                                <th>
                                    Ação
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sobres as $sobre)
                                <tr>

                                    <td>{{$sobre->titulo}}</td>
                                    <td>{{$sobre->slogan}}</td>
                                    <td>{{$sobre->missao}}</td>
                                    <td>{{$sobre->visao}}</td>
                                    <td>{{$sobre->valores}}</td>
                                    <td><img src="{{asset("img/about/$sobre->imagem")}}" alt="" width="100" height="100"></td>
                                    <td>
                                        <a href="{{ route('admin.sobre.edit', ['id' => $sobre->id]) }}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="{{ route('admin.sobre.destroy', ['id' => $sobre->id]) }}" class="btn btn-danger btn-sm">Deletar</a>
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