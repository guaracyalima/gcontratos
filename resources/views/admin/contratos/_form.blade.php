<div class="panel-body">

    <div class="row">



        <div class="form-group">
            {!! Form::label('id', 'Cliente:') !!}

            {!! Form::select('cliente_id', $clientes, null ,['class' => 'form-control', 'placeholder' => 'id do cliente']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('produto_id', 'Produto:') !!}

            {!! Form::select('produto_id', $produtos, null ,['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('Quantidade', 'Quantidade:') !!}

            {!! Form::text('quantidade', null ,['class' => 'form-control', 'id' => 'quantidade']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('precoUnitario', 'Preço Unitario:') !!}

            {!! Form::text('precoUnitario', null ,['class' => 'form-control', 'onblur' => 'calcValor()']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('total', 'Total:') !!}

            {!! Form::text('total', null ,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição', 'Descrição:') !!}

            {!! Form::textarea('descricao', null ,['class' => 'form-control']) !!}
        </div>


    </div>

    @section('post-script')

    <script>
        function calcValor(){
    // zerando total
    document.getElementById("total").value = '0';

    // valor líquido
    var VTOTALLIQUIDO = parseFloat(document.getElementById("quantidade").value);

    // desconto em porcentagem
    var DESCONTO1 = parseFloat(document.getElementById("precoUnitario").value);
    if( isNaN ( DESCONTO1 ) ){
        DESCONTO1 = 0;
    }

    var PDESCONTO = parseFloat(  VTOTALLIQUIDO * DESCONTO1 );

    // desconto em valor
    // var VDESCONTO = parseFloat(document.getElementById("desconto2").value);
    // if( isNaN ( VDESCONTO ) ){
    //  VDESCONTO = 0;
    // }
    // - parseFloat(VDESCONTO)

    var TOTAL = parseFloat(PDESCONTO) ;

    document.getElementById("total").value = TOTAL.toFixed(2);
}

        </script>

        @endsection