
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}

    {!! Form::text('titulo', null ,['class' => 'form-control', 'placeholder' => 'Uma frase legal']) !!}
</div>
<div class="form-group">
    {!! Form::label('descricao', 'Descrição:') !!}

    {!! Form::textarea('descricao', null ,['class' => 'form-control', 'placeholder' => ' sobre publicidade']) !!}
</div>

<div class="form-group">
    {!! Form::label('imagem', 'Imagem:') !!}

    {!! Form::file('imagem', null ,['class' => 'form-control']) !!}
</div>

