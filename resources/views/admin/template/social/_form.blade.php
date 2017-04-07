


    <div class="form-group">
        {!! Form::label('nome', 'Rede:') !!}

        {!! Form::select('nome', $rede, null ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('link', 'Link:') !!}

        {!! Form::text('link', null ,['class' => 'form-control', 'col' => '12', 'rows' =>'5']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}

        {!! Form::select('status',$status, null ,['class' => 'form-control', 'col' => '12', 'rows' =>'5']) !!}
    </div>

