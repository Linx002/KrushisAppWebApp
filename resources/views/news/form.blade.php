<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('noticiaTitulo') }}
            {{ Form::text('noticiaTitulo', $news->noticiaTitulo, ['class' => 'form-control' . ($errors->has('noticiaTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Noticiatitulo']) }}
            {!! $errors->first('noticiaTitulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('noticiaTexto') }}
            {{ Form::text('noticiaTexto', $news->noticiaTexto, ['class' => 'form-control' . ($errors->has('noticiaTexto') ? ' is-invalid' : ''), 'placeholder' => 'Noticiatexto']) }}
            {!! $errors->first('noticiaTexto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('noticiaTipo') }}
            {{ Form::text('noticiaTipo', $news->noticiaTipo, ['class' => 'form-control' . ($errors->has('noticiaTipo') ? ' is-invalid' : ''), 'placeholder' => 'Noticiatipo']) }}
            {!! $errors->first('noticiaTipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>