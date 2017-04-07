@extends('layouts.admin')

@section('conteudo')

    <div class="table-responsive">
        <div class="l-spaced">
            <div class="l-row">
                <div class="l-box">
                    <div class="l-box-header">
                        <h2 class="l-box-title"><span>Logo</span></h2>
                        <a href="{{ route('admin.logo.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Alterar logo</span></a>
                        <ul class="l-box-options">

                            <li><a href="#"><i class="fa fa-cogs"></i></a></li>
                            <li><a href="#" data-ason-type="fullscreen" data-ason-target=".l-box" data-ason-content="true" class="ason-widget"></a></li>
                            <li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>
                            <li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
                            <li><a href="#" data-ason-type="delete" data-ason-target=".l-box" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
                        </ul>
                    </div>
                    <div class="l-box-body">
                        <div class="l-spaced">
                            <div class="doc doc-info doc-border doc-left l-spaced-bottom">Logos cadastradas</div>
                        </div>

                        <table id="fooTableId" data-filter="#filter" data-page-size="5" class="table table-hover label-container table-responsive text-center ">
                            <thead>
                            <tr class="active">
                                <th class="text-center" data-toggle="true">Imagem</th>
                                <th class="text-center">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logos as $logo)
                                <tr>

                                    <td><img src="{{asset("img/logos/$logo->logo")}}" alt="" width="100" height="100"></td>
                                    <td>

                                        <a href="{{ route('admin.logo.edit', ['id' => $logo->id]) }}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="{{ route('admin.logo.destroy', ['id' => $logo->id]) }}" class="btn btn-danger btn-sm">Deletar</a>

                                    </td>
                                    @endforeach
                                </tr>

                            </tbody>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="5" class="tac">
                                    <ul class="pagination"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection