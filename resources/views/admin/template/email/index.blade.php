@extends('layouts.index')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">

            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>E-mails
                    </div>
                    <a href="{{ route('admin.email.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Email</span></a>
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
                                    Email
                                </th>

                                <th>
                                    Ação
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($email as $email)
                                <tr>
                                    <td>{{$email->email}}</td>
                                    <td>

                                        <a href="{{ route('admin.email.edit', ['id' => $email->id]) }}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="{{ route('admin.email.destroy', ['id' => $email->id]) }}" class="btn btn-danger btn-sm">Deletar</a>

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