@extends('layouts.index')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">

            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>E-mails
                    </div>
                    <a href="{{ route('admin.contatos.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Email</span></a>
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
                                    Telefone
                                </th>
                                <th>
                                    Endereço
                                </th>

                                <th>
                                    Ação
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contatos as $contato)
                                <tr>
                                    <td>{{$contato->fone}}</td>
                                    <td>{{$contato->endereco}}</td>
                                    <td>

                                        <a href="{{ route('admin.contatos.edit', ['id' => $contato->id]) }}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="{{ route('admin.contatos.destroy', ['id' => $contato->id]) }}" class="btn btn-danger btn-sm">Deletar</a>

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
    {{--<div class="table-responsive">--}}
        {{--<div class="l-spaced">--}}
            {{--<div class="l-row">--}}
                {{--<div class="l-box">--}}
                    {{--<div class="l-box-header">--}}
                        {{--<h2 class="l-box-title"><span>Contato</span></h2>--}}
                        {{--<a href="{{ route('admin.contatos.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Contato</span></a>--}}
                        {{--<ul class="l-box-options">--}}

                            {{--<li><a href="#"><i class="fa fa-cogs"></i></a></li>--}}
                            {{--<li><a href="#" data-ason-type="fullscreen" data-ason-target=".l-box" data-ason-content="true" class="ason-widget"></a></li>--}}
                            {{--<li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>--}}
                            {{--<li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>--}}
                            {{--<li><a href="#" data-ason-type="delete" data-ason-target=".l-box" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="l-box-body">--}}
                        {{--<div class="l-spaced">--}}
                            {{--<div class="doc doc-info doc-border doc-left l-spaced-bottom">Contatos cadastrados</div>--}}
                        {{--</div>--}}

                        {{--<table id="fooTableId" data-filter="#filter" data-page-size="5" class="table table-hover label-container table-responsive text-center ">--}}
                            {{--<thead>--}}
                            {{--<tr class="active">--}}
                                {{--<th class="text-center" data-toggle="true">ID</th>--}}
                                {{--<th class="text-center" data-hide="phone">Telefone</th>--}}
                                {{--<th class="text-center">Endereço</th>--}}
                                {{--<th class="text-center">Ação</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($contatos as $contato)--}}
                            {{--<tr>--}}

                                    {{--<td>{{$contato->id}}</td>--}}
                                    {{--<td>{{$contato->fone}}</td>--}}
                                    {{--<td>{{$contato->endereco}}</td>--}}
                                    {{--<td>--}}

                                        {{--<a href="{{ route('admin.contatos.edit', ['id' => $contato->id]) }}" class="btn btn-info btn-sm">Editar</a>--}}
                                        {{--<a href="{{ route('admin.contatos.destroy', ['id' => $contato->id]) }}" class="btn btn-danger btn-sm">Deletar</a>--}}

                                    {{--</td>--}}
                                {{--@endforeach--}}
                            {{--</tr>--}}

                            {{--</tbody>--}}
                            {{--<tfoot class="hide-if-no-paging">--}}
                            {{--<tr>--}}
                                {{--<td colspan="5" class="tac">--}}
                                    {{--<ul class="pagination"></ul>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--</tfoot>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
@endsection