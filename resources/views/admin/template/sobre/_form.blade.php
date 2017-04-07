
<div class="form-group">
    {!! Form::label('titulo', 'Nome:') !!}

    {!! Form::text('titulo', null ,['class' => 'form-control', 'placeholder' => 'Azulão Esportes']) !!}
</div>
<div class="form-group">
    {!! Form::label('slogan', 'Slogan:') !!}

    {!! Form::textarea('slogan', null ,['class' => 'form-control', 'placeholder' => 'Confiança qualidade e vida']) !!}
</div>

<div class="form-group">
    {!! Form::label('missao', 'Missao:') !!}

    {!! Form::textarea('missao', null ,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('visao', 'Visao:') !!}

    {!! Form::textarea('visao', null ,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('valores', 'Valores:') !!}

    {!! Form::textarea('valores', null ,['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('imagem', 'Imagem:') !!}

    {!! Form::file('imagem', null ,['class' => 'form-control']) !!}
</div>

