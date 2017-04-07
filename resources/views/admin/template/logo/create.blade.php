@extends('layouts.index')

@section('conteudo')

    @include('errors._check')
    <div class="row">
        <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Faça upload da logo
                    </div>
                    <div class="tools">
                        <a href="" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="" class="reload">
                        </a>
                        <a href="" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">


                    {!! Form::open(['route' => 'admin.logo.store', 'files' => true, 'class' => '', 'role' => 'form']) !!}
                    <div class="form-body">
                        @include('admin.logo._form')
                        <div class="form-actions">
                            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

@endsection