<div class="panel-body">

    <div class="row">

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}

            {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Fulano de Tal']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição', 'Descrição:') !!}

            {!! Form::text('descricao', null ,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}

            {!! Form::text('quantidade', null ,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('precoUnitario', 'Preço Unitario:') !!}

            {!! Form::text('precoUnitario', null ,['class' => 'form-control', 'placeholder' => 'R$ 00,00']) !!}
        </div>


    </div>