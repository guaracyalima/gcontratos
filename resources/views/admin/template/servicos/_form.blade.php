


    <div class="form-group">
        {!! Form::label('nome', 'Nome do serviço:') !!}

        {!! Form::text('nome', null ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}

        {!! Form::textarea('descricao', null ,['class' => 'form-control', 'col' => '12', 'rows' =>'5']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('imagem', 'Imagem:') !!}

        {!! Form::file('imagem', null ,['class' => 'form-control']) !!}
    </div>

