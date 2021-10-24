<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Titulo de la noticia') }}
            {{ Form::text('noticiaTitulo', $news->noticiaTitulo, ['class' => 'form-control' . ($errors->has('noticiaTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo de la noticia a publicar']) }}
            {!! $errors->first('noticiaTitulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Detalle de noticia') }}
            {{ Form::textarea('noticiaTexto', $news->noticiaTexto, ['class' => 'form-control' . ($errors->has('noticiaTexto') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion detallada de la noticia']) }}
            {!! $errors->first('noticiaTexto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria de noticia') }}
            {{ Form::text('noticiaTipo', $news->noticiaTipo, ['class' => 'form-control' . ($errors->has('noticiaTipo') ? ' is-invalid' : ''), 'placeholder' => ' - Dropdown -']) }}
            {!! $errors->first('noticiaTipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Publicar</button>
    </div>
</div>
