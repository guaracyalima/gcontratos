<div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
    <div class="input-group">
        <span class="input-group-addon">
											<i class="fa fa-user"></i>
											</span>
        {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Nome']) !!}

    </div>
</div>

<div class="form-group">
    <label>Endereço</label>
    <div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
											</span>
        {!! Form::text('endereco', null ,['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
    </div>
</div>
<div class="form-group">
    <label>Telefone</label>
    <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
        {!! Form::text('telefone', null ,['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
    </div>
</div>

<div class="form-group">
    <label>Whatsapp</label>
    <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
        {!! Form::text('whatsapp', null ,['class' => 'form-control', 'placeholder' => 'Whatsapp']) !!}
    </div>
</div>

<div class="form-group">
    <label>E-mail</label>
    <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
        {!! Form::text('email', null ,['class' => 'form-control input-circle-right', 'placeholder' => 'Email']) !!}
    </div>
</div>
