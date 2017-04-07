<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}

    {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Ex: Fraldinha']) !!}
</div>
<div class="form-group">
    {!! Form::label('descricao', 'Descrição:') !!}

    {!! Form::textarea('descricao', null ,['class' => 'form-control', 'placeholder' => 'Ex: boa para churrasco']) !!}
</div>

<div class="form-group">
    {!! Form::label('preco', 'Preço:') !!}

    {!! Form::text('preco', null ,['class' => 'form-control', 'placeholder' => 'R$ 00,00']) !!}
</div>

<div class="form-group">
    {!! Form::label('peso', 'Peso:') !!}

    {!! Form::text('peso', null ,['class' => 'form-control', 'placeholder' => '00,00 kg']) !!}
</div>

<div class="form-group">
    {!! Form::label('fornecedor', 'Fornecedor:') !!}

    {!! Form::text('fornecedor', null ,['class' => 'form-control', 'placeholder' => '00,00 kg']) !!}
</div>

<div class="form-group">
    {!! Form::label('imagem', 'Imagem:') !!}

    {!! Form::file('imagem', null ,['class' => 'form-control']) !!}
</div>
