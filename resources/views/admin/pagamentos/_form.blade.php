<div class="panel-body">

    <div class="row text-center">

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}

            {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Recebo carro']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição', 'Descrição:') !!}

            {!! Form::text('descricao', null ,['class' => 'form-control', 'placeholder' => 'Recebo carro no negocio']) !!}
        </div>

    </div>