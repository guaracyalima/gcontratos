@extends('app')

@section('content')
@section('post-script')
    <script>
      aq  var x = document.getElementsByClassName(".status0").valueOf();

        console.log("Valor da variavel "+ x);

    </script>
@endsection
<div class="container">
    @foreach($nomeDoCliente as $cliente)
        <br>

        <div class="panel panel-primary">

            <div class="panel-heading">
                <strong>Detalhes do cliente</strong>
            </div>

            <div class="panel-body">

                @foreach($nomeDoCliente as $cliente)

                    <div class="row">
                        <div class="col-md-2">
                            <p>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <strong>{{ $cliente->nome }}</strong>
                            </p>
                        </div>

                        <div class="col-md-2">
                            <p>
                                <i class="fa fa-id-card" aria-hidden="true"></i>
                                {{ $cliente->cpf }}
                            </p>
                        </div>

                        <div class="col-md-3">
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                {{ $cliente->email }}
                            </p>
                        </div>

                        <div class="col-md-2">
                            <p>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                {{ $cliente->telefone }}
                            </p>
                        </div>

                        <div class="col-md-2">
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{--{{ $cliente->endereco }}--}}
                            </p>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>

    @endforeach
    <br>

    <div class="panel panel-default with-nav-tabs">

        <div class="panel-heading">

            <ul class="nav nav-tabs">
                @foreach($carne as $item)

                    <li >
                        <a  href="#{{ $item->id }}" data-toggle="tab" class="parcelNumb">
                            {{ date('d-m-Y', strtotime($item->vencimento)) }}

                            @if($item->status == 0)

                                <i class="fa fa-hourglass-half fa-spin" aria-hidden="true"></i>

                            @elseif($item->status == 1)
                                <i class="fa fa-check-circle" aria-hidden="true"></i>

                            @elseif($item->status == 2)
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            @elseif($item->status == 3)
                                <i class="fa fa-ban" aria-hidden="true"></i>
                            @endif
                        </a>
                    </li>

                    {{--Modals--}}

                    <div class="modal fade" role="dialog" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">{{-- Content--}}
                                <div class="modal-header">{{-- header--}}
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="text-center modal-title">Alterar data de pagamento</h4>
                                </div> {{-- header--}}
                                <div class="modal-body">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    {{--<button type="button" class="btn btn-primary">Salvar</button>--}}
                                </div>

                            </div>{{-- Content--}}
                        </div>{{-- modal-dialog--}}
                    </div>{{-- modal--}}

                    {{--@endfor--}}

                @endforeach

            </ul>

        </div>
        <div class="panel-body">
            <div class="tab-content ">
                @foreach($carne as $item)

                    <div class="tab-pane" id="{{ $item->id }}">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-3">
                                <div class="btn-group" role="group">

                                    @if($item->status == 0)
                                        <button class="btn btn-primary">
                                            <i class="glyphicon glyphicon-envelope"></i>

                                            Enviar por email
                                        </button>

                                        <button class="btn btn-warning" >
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                            Enviar por SMS
                                        </button>
                                    @elseif($item->status == 1)
                                        <button class="btn btn-success">
                                            <i class="glyphicon glyphicon-envelope"></i>

                                            Enviar por email
                                        </button>
                                        <button class="btn btn-success" >
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                            Enviar por SMS
                                        </button>
                                    @endif

                                    @if($item->created_at == $item->updated_at)
                                        <button class="btn btn-success botoesJuntos">
                                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                            <a href="{{ route('admin.carnes.confPagamento', ['id'=>$item->id, 'status' => 1]) }}">
                                                Confirmar pagamento
                                            </a>
                                        </button>

                                        <button class="btn btn-danger" >
                                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                            <a href="{{ route('admin.carnes.cancelarParcela', ['id'=>$item->id, 'status' => 3])}}">
                                                Cancelar
                                            </a>
                                        </button>
                                    @endif

                                </div> {{--bt-ngroup--}}
                            </div>{{--Col-md-10--}}
                        </div>{{--row--}}
                        <br>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-info">

                                    <div class="panel-heading">
                                        <strong>Detalhes do cliente</strong>
                                    </div>

                                    <div class="panel-body">

                                        @foreach($nomeDoCliente as $cliente)

                                            <p>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <strong>{{ $cliente->nome }}</strong>
                                            </p>

                                            <p>
                                                <i class="fa fa-id-card" aria-hidden="true"></i>
                                                {{ $cliente->cpf }}
                                            </p>

                                            <p>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                {{ $cliente->email }}
                                            </p>

                                            <p>
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                {{ $cliente->telefone }}
                                            </p>

                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{--{{ $cliente->endereco }}--}}
                                            </p>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="panel panel-info">

                                    <div class="panel-heading">
                                        <b>Status da parcela</b>
                                    </div>

                                    <div class="panel-body">
                                        <p>

                                        @if($item->status == 0)

                                            <div class="alert alert-info" role="alert">
                                                <h5 class="text-center">
                                                    <strong>Aguardando pagamento</strong>
                                                </h5>
                                            </div>

                                        @elseif($item->status == 1)

                                            <div class="alert alert-success" role="alert">
                                                <h5 class="text-center">
                                                    <strong>Pago</strong> em
                                                    {{ date('d/m/Y', strtotime($item->updated_at)) }}
                                                </h5>

                                                {{--{{ $item->updated_at }}--}}
                                            </div>

                                        @elseif($item->status == 2)

                                            <div class="alert alert-danger" role="alert">
                                                <h5 class="text-center">
                                                    <strong>Vencido</strong>
                                                </h5>
                                            </div>

                                        @elseif($item->status == 3)

                                            <div class="alert alert-danger" role="alert">
                                                <h5 class="text-center">
                                                    <strong>Cancelado</strong> em
                                                    {{ date('d/m/Y', strtotime($item->updated_at)) }}
                                                </h5>
                                            </div>

                                            @endif
                                            </p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="panel panel-info">

                                    <div class="panel-heading">
                                        <b>Valor da parcela</b>
                                    </div>

                                    <div class="panel-body">
                                        <p>
                                            R$ {{ number_format($item->valorParcela, 2) }}
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="panel panel-info">

                                    <div class="panel-heading">
                                        <b>Informações</b>
                                    </div>

                                    <div class="panel-body">

                                        <p><strong>Emissão:</strong>
                                            {{ date('d/m/Y', strtotime($item->created_at)) }}
                                        </p>
                                        <p> <strong>Vencimento:</strong>
                                            {{ date('d/m/Y', strtotime($item->vencimento)) }}

                                        </p>

                                        <p><strong>Total</strong>
                                            R$ {{ number_format($item->total, 2) }}
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Ver dados em tabela
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">



                    <table class="table table-bordered table-hover table-responsive">
                        <thead class="text-center">
                        <tr class="active text-center">

                            <th>Cliente</th>
                            <th>CPF</th>
                            <th>Valor Unitario</th>
                            <th>Quantidade</th>
                            <th>Vencimento</th>
                            <th>Valor da parcela</th>
                            <th>Desconto</th>
                            <th>Total</th>
                            <th>Situação</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($carne as $item)

                            @if($item->status == 0)
                            <tr class="info">
                                @elseif($item->status == 1)
                                    <tr class="success">
                                        @elseif($item->status == 2)
                                            <tr class="warning">
                                                @elseif($item->status == 3)
                                                    <tr class="active">
                                @endif
                                                        {{--@if({{ date('d/m/Y') }})--}}


                                @foreach($nomeDoCliente as $cliente)
                                    <td>{{ $cliente->nome }}</td>
                                @endforeach

                                <td>{{ $item->cpf }}</td>

                                <td>R$ {{ number_format($item->valorUnitario, 2) }}</td>

                                <td>{{ $item->quantidade }}</td>
                                <td>{{ date('d/m/Y', strtotime($item->vencimento)) }}</td>


                                <td>R$ {{ number_format($item->valorParcela, 2) }}</td>
                                <td>R$ {{ number_format($item->desconto, 2) }}</td>
                                <td>R$ {{ number_format($item->total, 2) }}</td>


                                <td class="status" hidden>

                                    @if($item->status == 0)
                                        <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                                    @elseif($item->status == 1)
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    @elseif($item->status == 2)
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    @elseif($item->status == 3)
                                        <i class="fa fa-ban red-cancelado banIcon" aria-hidden="true"></i>
                                    @endif

                                </td>

                                <td class="text-center">
                                    @if($item->created_at == $item->updated_at)

                                    @endif
                                    @if($item->status == 1)
                                        <p class="status1">
                                            <strong class="iconStatus">
                                                <i class="fa fa-check-circle " aria-hidden="true"></i>
                                            </strong>
                                            Pago
                                        </p>
                                    @elseif($item->status == 0)
                                        <p class="status0">
                                            <strong class="iconStatus">
                                                <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                                            </strong>
                                            Pendente
                                        </p>
                                    @elseif($item->status == 3)
                                        <p class=" status3">
                                            <strong class="iconStatus">
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </strong>
                                            Cancelado
                                        </p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

<section id="modals">
    <div class="modal fade" id="modalReceber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLabel">Confirmar recebimento?</h3>

                </div>

                <div class="modal-body">

                    {!! Form::open(['send'=>'/admin/carnes/confPagamento', 'class' => 'form-add-state']) !!}
                    <input type="hidden" name="id" value="$item->id">
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit( 'Cadastrar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                    <div class="preloader" style=" display: none">
                        Enviando dados...
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>

</section>

<p class="text-center text-primary">developed by guabirabaDev</p>

@section('post-script')
    <script>

        $(function(){

            $("#btnReceber").click(
                    function(){
                        $("#modalReceber").modal('show');
                    });

        });

        $(function () {
            $("form.form-add-state").submit(function () {


                var dados = $(this).serialize();

                $.ajax({
                    url: $(this).attr("send"),
                    data: dados,
                    type: "POST",
                    beforeSend: iniciaPreloader()

                }).done(function () {

                    finalizaPreloader();
                    alert("Estado cadastrado com sucesso!");

                }).fail(function () {

                    finalizaPreloader();
                    alert("Falha ao cadastrar!");

                });

                return false;
            })
        });

        function iniciaPreloader() {
            $(".preloader").show();
        }

        function finalizaPreloader() {
            $(".preloader").hide();
        }
    </script>
@endsection
@endsection