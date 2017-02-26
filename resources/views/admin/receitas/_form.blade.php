<div class="panel-body">

    <div class="row">

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}

            {!! Form::text('nome',null ,['class' => 'form-control', 'placeholder' => 'Nome da despesa']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição', 'Descrição:') !!}

            {!! Form::textarea('descricao', null ,['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vencimento', 'Vencimento:') !!}

            {!! Form::input('date','vencimento', null ,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valor', 'Valor') !!}

            {!! Form::text('valor', null ,['class' => 'form-control', 'placeholder' => 'R$ 00,00']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Status', 'Status do debito:') !!}

            {!! Form::select('status',$list_status, null ,['class' => 'form-control', 'placeholder' => 'id do produto']) !!}
        </div>

    </div>



    </div>

    @section('post-script')

    <script>
        function calcValor(){
                // zerando total
                document.getElementById("total").value = '0';

                // valor líquido
                var VTOTALLIQUIDO = parseFloat(document.getElementById("valorUnitario").value);

                //pega a quantidade
                var quantidade = parseFloat(document.getElementById("quantidade").value);

                var valorReal = parseFloat(VTOTALLIQUIDO * quantidade);

                console.log("Quantidade e valorUnitario "+valorReal);

                // desconto em porcentagem
                var DESCONTO1 = parseFloat(document.getElementById("desconto").value);
                if( isNaN ( DESCONTO1 ) ){
                    DESCONTO1 = 0;
                }

                console.log("Desconto "+DESCONTO1);

                var PDESCONTO = parseFloat( ( valorReal * DESCONTO1 ) / 100 );

                // desconto em valorUnitario
                // var VDESCONTO = parseFloat(document.getElementById("desconto2").value);
                // if( isNaN ( VDESCONTO ) ){
                // 	VDESCONTO = 0;
                // }
                // - parseFloat(VDESCONTO)

                var TOTAL = parseFloat(valorReal) - parseFloat(PDESCONTO) ;

                document.getElementById("total").value = TOTAL.toFixed(2);
            }


            //CALCULA O VALOR DAS PARCELAS
            //
            function calculaValorParcela() {

                //zera o valor da parcela atualmente descrito no campo
                document.getElementById("valorParcelas").value = '0';

                //pega o valor total
                var valorTotal = parseFloat(document.getElementById("total").value);

                if (isNaN(valorTotal)) {
                    valorTotal = 0;
                    //alert("O valor total não pode ser nulo");
                }

                var parcelas = parseFloat(document.getElementById("parcelas").value);

                if (isNaN(parcelas)) {
                    parcelas = 0;
                    alert("O pagamento vai ser a vista?");
                }

                var valParcela = parseFloat(valorTotal) / parseFloat(parcelas) ;


                document.getElementById("valorParcelas").value = valParcela.toFixed(2);

            }
</script>

@endsection