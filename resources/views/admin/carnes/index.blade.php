@extends('layouts.index')

@section('conteudo')

@section('post-script')
    <script>
        $(function(){

            $("#exc").click(
                    function(){
                        $("#cadCarne").modal('show');
                    });
        });

        $(function(){

            $("#getModalParcelamento").click(
                    function(){
                        $("#defineParcelamento").modal('show');
                    });
        });


        $(function () {
            $("form.form-add-state").submit(function () {


                var dados = $(this).serialize();

                console.log(dados);

                $.ajax({
                    url: $(this).attr("send"),
                    data: dados,
                    type: "POST",
                    beforeSend: iniciaPreloader()

                }).done(function () {

                    finalizaPreloader();
                    alert("Cadastrado com sucesso!");

                }).fail(function () {

                    finalizaPreloader();
                    alert("Falha ao cadastrar!");

                });

                return false;
            })
        });


        //parcelamento
        $(function () {
            $("form.formDefineParcelamento").submit(function () {


                var dados = $(this).serialize();



                $.ajax({
                    url: $(this).attr("send"),
                    data: dados,
                    type: "POST",
                    beforeSend: iniciaPreloader()

                }).done(function () {

                    finalizaPreloader();
                    alert("Cadastrado com sucesso!");

                }).fail(function () {
                    console.log(dados);
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





        function calculaTotal(){
            // zerando total
            document.getElementById("total").value = '0';

            // valor líquido
            var VTOTALLIQUIDO = parseFloat(document.getElementById("valorUnitario").value);

            //pega a quantidade
            var quantidade = parseFloat(document.getElementById("quantidade").value);

            var valorReal = parseFloat(VTOTALLIQUIDO * quantidade);

            console.log("Quantidade e valorUnitario "+valorReal);

            // desconto em porcentagem
//                var DESCONTO1 = parseFloat(document.getElementById("desconto").value);
//                if( isNaN ( DESCONTO1 ) ){
//                    DESCONTO1 = 0;
//                }
//
//                console.log("Desconto "+DESCONTO1);
//
//                var PDESCONTO = parseFloat( ( valorReal * DESCONTO1 ) / 100 );

            // desconto em valorUnitario
            // var VDESCONTO = parseFloat(document.getElementById("desconto2").value);
            // if( isNaN ( VDESCONTO ) ){
            // 	VDESCONTO = 0;
            // }
            // - parseFloat(VDESCONTO)

            //var TOTAL = parseFloat(valorReal) - parseFloat(PDESCONTO) ;
            var TOTAL = parseFloat(valorReal);

            document.getElementById("total").value = TOTAL.toFixed(2);
        }

        //CALCULA O VALOR DAS PARCELAS

        function calculaValorParcela() {

            //zera o valor da parcela atualmente descrito no campo
            document.getElementById("valorParcela").value = '0';

            //pega o valor total
            var valorTotal = parseFloat(document.getElementById("total").value);

            if (isNaN(valorTotal)) {
                valorTotal = 0;
                //alert("O valor total não pode ser nulo");
            }

            var parcelas = parseFloat(document.getElementById("numParcelas").value);

            if (isNaN(parcelas)) {
                parcelas = 0;
                alert("O pagamento vai ser a vista?");
            }

            var valParcela = parseFloat(valorTotal) / parseFloat(parcelas) ;


            document.getElementById("valorParcela").value = valParcela.toFixed(2);

        }
    </script>

    <div class="container" >
        <h3 class="text-center">Carnês</h3>

        <br>

        <a href="{{ route('admin.carnes.create') }}" class="btn btn-success"
           data-toggle="modal" data-target="#exampleModal" id="exc"> Novo carnê</a>

        <a href="#" class="btn btn-warning"
           data-toggle="modal" data-target="#definirParcelamento" id="getModalParcelamento" id> Definir parcelamento</a>


        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>id</th>
                <th>CPF</th>
                <th>Produto </th>


                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($carnes as $carne)


                    <tr>
                        <td>{{ $carne->id }}</td>
                        <td><a href="{{ route('admin.carnes.show', ['cpf'=>$carne->cpf]) }}">{!! $carne->cpf !!} </a></td>

                        <td>{{ $carne->produto_id }}</td>

                        <td>
                            <a href="{{ route('admin.carnes.edit', ['id'=>$carne->id]) }}" class=" btn btn-primary">Editar</a>
                            <a href="{{ route('admin.carnes.generate', ['id' => $carne->id]) }}" class=" btn btn-success">Baixa</a>

                            <a href="{{ route('admin.carnes.destroy', ['id'=>$carne->id]) }}" class=" btn btn-danger">Excluir</a>
                        </td>

                    </tr>

            @endforeach
            </tbody>
        </table>
        {!! $carnes->render() !!}




    </div>

    {{--Modal de cadastro de carnês--}}
    <div class="modal fade" id="cadCarne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar carnê</h5>
                </div>
                <div class="modal-body">
                    @include('errors._check')
                    {!! Form::open(['send'=>'/admin/carnes/ajaxAdd', 'class' => 'form-add-state']) !!}

                    <div class="form-group">
                        {!! Form::label('cpf', 'Cliente:') !!}

                        {!! Form::select('cpf',$clientes, null ,['class' => 'form-control', 'placeholder' => 'id do cliente']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Produto', 'Produto:') !!}

                        {!! Form::select('produto_id',$produtos, null ,['class' => 'form-control', 'placeholder' => 'id do produto']) !!}
                    </div>

                    <div class="form-group">

                    </div>
                    <div class="preloader" style=" display: none">

                        Enviando dados...
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                    {!! Form::submit( 'Cadastrar carnê', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    {{-- Fim modal de cadastro de carnês--}}

    {{--Define parcelamento--}}
    <div class="modal fade" id="defineParcelamento" tabindex="-1" role="dialog" aria-labelledby="definirParcelamento" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLabel">Definir parcelamento</h3>
                </div>
                <div class="modal-body">
                    @include('errors._check')

                    <div class="panel panel-success">

                        <div class="panel-heading">
                            <h4>Forma de pagamento</h4>
                        </div>

                        <div class="panel-body">
                            @include('errors._check')

                            {!! Form::open(['send'=>'/admin/carnes/ajaxParcela', 'class' => 'formDefineParcelamento form-inline']) !!}

                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('cpf', 'Cliente:') !!}
                                    {!! Form::select('cpf',$clientes, null ,['class' => 'form-control', 'placeholder' => 'id do cliente']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('carne_id', 'Carnê:') !!}
                                    {!! Form::select('carne_id', $idDosCarnes, null ,['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Produto', 'Produto:') !!}
                                    {!! Form::select('produto_id',$produtos, null ,['class' => 'form-control', 'placeholder' => 'id do produto']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('quantidade', 'Quantidade:') !!}
                                    {!! Form::text('quantidade', null ,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <hr>

                            <div class="row">


                                <div class="form-group">
                                    {!! Form::label('valorUnitario', 'Valor Unitario:') !!}
                                    {!! Form::text('valorUnitario', null ,['class' => 'form-control', 'onblur' => 'calculaTotal()']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('numParcelas', 'Numero de parcelas:') !!}
                                    {!! Form::text('numParcelas', null ,['class' => 'form-control', 'onblur' => 'calculaValorParcela()']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('vencimento', 'Vencimento:') !!}
                                    {!! Form::input('date','vencimento', null ,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('valorParcela', 'Valor da parcela:') !!}
                                    {!! Form::text('valorParcela', null ,['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('total', 'Total:') !!}
                                    {!! Form::text('total', null ,['class' => 'form-control', 'disabled']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('status', 'Carnê:') !!}
                                    {!! Form::select('status', $list_status, null ,['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group">
                            </div>
                            <div class="preloader" style=" display: none">
                                Sending data...
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                            {!! Form::submit( 'Definir parcelas', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div> {{-- Panel-Body --}}

                </div> {{--panel--}}

            </div>
        </div>
    </div>

    {{--Define parcelamento--}}

@endsection
