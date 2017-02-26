<div class="panel-body">

    <div class="row">
        <h4 class="text-center">Dados pessoais</h4>
        <hr>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}

                {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Fulano de Tal']) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('E-mail', 'E-mail:') !!}

                {!! Form::text('email', null ,['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('cpf', 'CPF:') !!}

                {!! Form::text('cpf', null ,['class' => 'form-control', 'placeholder' => '000.0000.000-00']) !!}
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('rg', 'RG:') !!}

                {!! Form::text('rg', null ,['class' => 'form-control']) !!}
            </div>
        </div>

    </div>

    <br>

    <div class="row">

        <h4 class="text-center">Identificação</h4>
        <hr>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('emissorRG', 'Orgão Emissor:') !!}

                {!! Form::text('emissorRG', null ,['class' => 'form-control', 'size' => '10']) !!}
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('ufRG', 'UF:') !!}

                {!! Form::select('ufRG', $estados , null,['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('sexo', 'Sexo:') !!}


                {!! Form::select('sexo', $sexo , null,['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('cep', 'CEP:') !!}

                {!! Form::text('cep', null ,['class' => 'form-control', 'maxlength' => '8']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('logradouro', 'Logradouro:') !!}

                {!! Form::text('logradouro', null ,['class' => 'form-control']) !!}
            </div>
        </div>
    </div>


    <br>

    <div class="row">
        <h4 class="text-center">Contato</h4>
        <hr>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('numero', 'Numero:') !!}

                {!! Form::text('numero', null ,['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('complemento', 'Complemento:') !!}

                {!! Form::text('complemento', null ,['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('bairro', 'Bairro:') !!}

                {!! Form::text('bairro', null ,['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('cidade', 'Cidade:') !!}

                {!! Form::text('cidade', null ,['class' => 'form-control']) !!}
            </div>
        </div>

    </div>


    <div class="row">
        <h4 class="text-center">Dados pessoais</h4>
        <hr>



            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('uf', 'UF:') !!}

                    {!! Form::text('uf', null ,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('telefone', 'Telefone:') !!}

                    {!! Form::text('telefone', null ,['class' => 'form-control']) !!}
                </div>
            </div>

    </div>
</div>