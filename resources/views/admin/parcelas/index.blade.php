{!! Form::open(['send'=>'/admin/parcelas/defineParcelamento', 'class' => 'formDefineParcelamento form-inline']) !!}

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

    {!! Form::submit( 'Definir parcelas', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
