<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('New Title') }}
            {{ Form::text('noticiaTitulo', $news->noticiaTitulo, ['class' => 'form-control' . ($errors->has('noticiaTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Title of the announcement']) }}
            {!! $errors->first('noticiaTitulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Details of the announcement') }}
            {{ Form::textarea('noticiaTexto', $news->noticiaTexto, ['class' => 'form-control' . ($errors->has('noticiaTexto') ? ' is-invalid' : ''), 'placeholder' => 'Description of the announcement']) }}
            {!! $errors->first('noticiaTexto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('News category') }}
            {{ Form::select('noticiaTipo', array("Offers", "Job Opportunities", "Schedule Changes", "Menu Changes"), $news->noticiaTipo, ['class' => 'form-control' . ($errors->has('noticiaTipo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('noticiaTipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Publicar</button>
    </div>
</div>
