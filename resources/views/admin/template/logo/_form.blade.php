
<div class="form-group">
    <label for="exampleInputFile1">Escolher imagem</label>
    {!! Form::file('logo', null ,['class' => 'form-control']) !!}
    {{--<input type="file" id="exampleInputFile1">--}}
    <p class="help-block">
        Use imagem .jpg, .svg ou .png
    </p>
</div>
