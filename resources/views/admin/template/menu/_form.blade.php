


    <div class="form-group">
        {!! Form::label('menu', 'Item do menu:') !!}

        {!! Form::text('menu', null ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Staus:') !!}

        {!! Form::select('status', $status, null ,['class' => 'form-control']) !!}
    </div>

