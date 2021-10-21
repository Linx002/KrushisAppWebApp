<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('platilloTitulo') }}
            {{ Form::text('platilloTitulo', $dish->platilloTitulo, ['class' => 'form-control' . ($errors->has('platilloTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Platillotitulo']) }}
            {!! $errors->first('platilloTitulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('platilloImagen') }}
            {{ Form::text('platilloImagen', $dish->platilloImagen, ['class' => 'form-control' . ($errors->has('platilloImagen') ? ' is-invalid' : ''), 'placeholder' => 'Platilloimagen']) }}
            {!! $errors->first('platilloImagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('platilloDescripcion') }}
            {{ Form::text('platilloDescripcion', $dish->platilloDescripcion, ['class' => 'form-control' . ($errors->has('platilloDescripcion') ? ' is-invalid' : ''), 'placeholder' => 'Platillodescripcion']) }}
            {!! $errors->first('platilloDescripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('platilloPrecio') }}
            {{ Form::text('platilloPrecio', $dish->platilloPrecio, ['class' => 'form-control' . ($errors->has('platilloPrecio') ? ' is-invalid' : ''), 'placeholder' => 'Platilloprecio']) }}
            {!! $errors->first('platilloPrecio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('platilloOferta') }}
            {{ Form::text('platilloOferta', $dish->platilloOferta, ['class' => 'form-control' . ($errors->has('platilloOferta') ? ' is-invalid' : ''), 'placeholder' => 'Platillooferta']) }}
            {!! $errors->first('platilloOferta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('platilloStatus') }}
            {{ Form::text('platilloStatus', $dish->platilloStatus, ['class' => 'form-control' . ($errors->has('platilloStatus') ? ' is-invalid' : ''), 'placeholder' => 'Platillostatus']) }}
            {!! $errors->first('platilloStatus', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>