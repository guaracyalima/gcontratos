<div class="panel-body">

    <div class="row">

        <div class="form-group">
            {!! Form::label('cpf', 'Cliente:') !!}

            {!! Form::select('cpf',$clientes, null ,['class' => 'form-control', 'placeholder' => 'id do cliente']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Produto', 'Produto:') !!}

            {!! Form::select('produto_id',$produtos, null ,['class' => 'form-control', 'placeholder' => 'id do produto']) !!}
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

                //var TOTAL = parseFloat(valorReal) - parseFloat(PDESCONTO) ;
                var TOTAL = parseFloat(valorReal);

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